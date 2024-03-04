<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserLog;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class AuthController extends Controller
{
   //Show Login Page
   public function login()
   {
       if (!Auth::check()){
           return view('login');
       }elseif(Auth::check()){
        return redirect()->route('dashboard');
       }else{
        return redirect()->back();
       }

   }


     /**
    * Handle an authentication attempt.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

   public function authenticate(Request $request)
   {
       $credentials = $request->validate([
           'email' => 'required|email',
           'password' => 'required',
       ],[
           'email.required' => 'Email is required',
           'password.required' => 'Password is required',
       ]);


       if (Auth::attempt($credentials, $request->remember)) {
           $request->session()->regenerate();
           UserLog::create([
            'user_id' => Auth::user()->id,
            'action' => 'Logged In User ' . Auth::user()->name
        ]);

           return redirect()->route('dashboard');
       }

       return back()->withErrors([
           'email' => 'The provided credentials do not match our records.',
       ]);
   }

   //Logout - Destroy Session
   public function logout(Request $request)
   {
       Auth::logout();
       $request->session()->invalidate();
       $request->session()->regenerateToken();
       return redirect()->route('login')->with('flash_success', 'Logged out!');;
   }


   public function forgot(){
    return view('auth.forgot-password');
   }

   public function sendEmail(Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
}

    public function reset($token) {
        return view('auth.reset-password', ['token' => $token]);
    }

    public function resetPass(Request $request) {

        // dd($request->all()); pang check ng error
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

      try{
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );
      }catch(\Exception $e){
        Log::error($e);
        return redirect()->back()->withErrors(['email' => 'Did not work.']);
      }
        return $status === Password::PASSWORD_RESET
                    ? redirect()->route('login')->with('status', __($status))
                    : back()->withErrors(['email' => [__($status)]]);
    }
}
