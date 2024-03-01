<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\UserLog;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Log;
use DB;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', [
            'u' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ],[
            'name.required' => 'Fullname is required',
            'name.string' => 'Fullname must be string',
            'name.max' => 'Fullname max 100 letters',
            'email.required' => 'Email is required',
            'email.email' => 'Email is not valid',
            'password.required' => 'Password is required',
            'password.confirmed' => 'Password does not match'
        ]);

        try{
            DB::beginTransaction();


            User::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password'])
            ]);

            UserLog::create([
                'user_id' => Auth::user()->id,
                'action' => 'Added User ' . $validated['name']
            ]);

            DB::commit();
        }catch(\Exception $e){
            Log::error($e);
			DB::rollback();

			return redirect()
				->back()
				->with('flash_error', 'Something went wrong, please try again later.')
				->withInput();
        }

        return redirect()->back()->with('flash_success', 'Profile updated successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $u = User::find($id);
        return view('admin.users.view', compact('u'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    try {
        DB::beginTransaction();

        // Find the user
        $user = User::findOrFail($id);

        // Delete the user's session file
        $sessionKey = 'user_'.$user->id.'_login';
        if (Session::has($sessionKey)) {
            Session::forget($sessionKey);
        }

        // Delete the user
        $user->delete();

        UserLog::create([
            'user_id' => Auth::user()->id,
            'action' => 'Deleted User ' . $user->name
        ]);

        DB::commit();
    } catch (\Exception $e) {
        Log::error($e);
        DB::rollback();

        return redirect()
            ->back()
            ->with('flash_error', 'Something went wrong, please try again later.');
    }

    // Redirect to index page with success message
    return redirect()->back()->with('flash_success', 'User deleted successfully!');
}
}
