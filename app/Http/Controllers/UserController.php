<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use constGuards;
use constDefaults;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use  Illuminate\Support\Facades\Hash;
use  Illuminate\Support\Str;
use  Illuminate\Support\Carbon;

class userController extends Controller
{
    public function loginHandler(Request $request)
    {
        $fieldType = filter_var($request->users, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if ($fieldType == 'email') {
            $request->validate([
                'users' => 'required|email|exists:users,email',
                'password' => 'required|min:5|max:45'
            ], [
                'users.required' => 'Email or username is required',
                'users.email' => 'Invalid email address',
                'users.exists' => 'Email is not exists in system',
                'password.required' => 'Password is required'
            ]);
        } else {
            $request->validate([
                'users' => 'required|exists:users,username',
                'password' => 'required|min:5|max:45'
            ], [
                'users.required' => 'Email or username is required',
                'users.exists' => 'usersname is not exists in system',
                'password.required' => 'Password is salah'
            ]);
        }

        $creds = [
            $fieldType => $request->users,
            'password' => $request->password
        ];

        // Attempt login for investor guard
        if (Auth::guard('investor')->attempt($creds)) {
            return redirect()->route('investor.home');
        }
        
        // Attempt login for umkm guard
        elseif (Auth::guard('umkm')->attempt($creds)) {
            return redirect()->route('umkm.home');
        } else {
            session()->flash('fail', 'Incorrect credentials');
            return redirect()->route('loginmulti');
        }
    }

    public function logoutHandler(Request $request)
    {
        if (Auth::guard('investor')->check()) {
            Auth::guard('investor')->logout();
        } elseif (Auth::guard('umkm')->check()) {
            Auth::guard('umkm')->logout();
        }

        session()->flash('fail', 'You are logged out!');
        return redirect()->route('loginmulti');
    }
    
}
