<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class AdminController extends Controller
{
    public function loginHandler(Request $request)
    {
        $fieldType = filter_var($request->login_id, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        $request->validate([
            'login_id' => 'required|exists:users,' . $fieldType,
            'password' => 'required|min:5|max:45'
        ], [
            'login_id.required' => 'Email or Username is required',
            'login_id.exists' => $fieldType === 'email' ? 'Email does not exist in the system' : 'Username does not exist in the system',
            'password.required' => 'Password is required'
        ]);

        $creds = [
            $fieldType => $request->login_id,
            'password' => $request->password
        ];

        if (Auth::attempt($creds)) {
            $user = Auth::user();

            // Redirect berdasarkan role
            switch ($user->role) {
                case 'admin':
                    return redirect()->route('admin.dashboard');
                case 'umkm':
                    return redirect()->route('umkm.dashboard');
                case 'investor':
                    return redirect()->route('investor.dashboard');
                default:
                    Auth::logout();
                    return redirect()->route('login')->withErrors(['role' => 'Role tidak valid.']);
            }
        } else {
            session()->flash('fail', 'Incorrect credentials');
            return redirect()->route('login');
        }
    }

    public function logoutHandler(Request $request)
    {
        Auth::logout();
        session()->flash('fail', 'You are logged out!');
        return redirect()->route('login');
    }

    public function sendPasswordResetLink(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email'
        ], [
            'email.required' => 'The :attribute is required',
            'email.email' => 'Invalid email address',
            'email.exists' => 'The :email does not exist in the system'
        ]);

        //get user details
        $user = User::where('email', $request->email)->first();

        //generate token
        $token = base64_encode(Str::random(64));

        //check
        $oldToken = DB::table('password_reset_tokens')
            ->where(['email' => $request->email, 'guard' => 'user'])
            ->first();

        if ($oldToken) {
            //update token
            DB::table('password_reset_tokens')
                ->where(['email' => $request->email, 'guard' => 'user'])
                ->update([
                    'token' => $token,
                    'created_at' => Carbon::now()
                ]);
        } else {
            DB::table('password_reset_tokens')->insert([
                'email' => $request->email,
                'guard' => 'user',
                'token' => $token,
                'created_at' => Carbon::now()
            ]);
        }

        $actionLink = route('user.reset-password', ['token' => $token, 'email' => $request->email]);

        $data = [
            'actionLink' => $actionLink,
            'user' => $user
        ];
        $mail_body = view('email-templates.user-forgot-email-template', $data)->render();

        $mailConfig = [
            'mail_from_email' => env('EMAIL_FROM_ADDRESS'),
            'mail_from_name' => env('EMAIL_FROM_NAME'),
            'mail_recipient_email' => $user->email,
            'mail_recipient_name' => $user->name,
            'mail_subject' => 'Reset password',
            'mail_body' => $mail_body
        ];

        if (sendEmail($mailConfig)) {
            session()->flash('success', 'We have e-mailed your password reset link.');
            return redirect()->route('user.forgot-password');
        } else {
            session()->flash('fail', 'Something went wrong!');
            return redirect()->route('user.forgot-password');
        }
    }
}
