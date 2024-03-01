<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserLog;


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


}
