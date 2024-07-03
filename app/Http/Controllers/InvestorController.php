<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth; 
use constGuards;
use constDefaults;
use App\Models\investor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use  Illuminate\Support\Facades\Hash;
use  Illuminate\Support\Str;
use  Illuminate\Support\Carbon;

class InvestorController extends Controller
{
    public function loginHandler(Request $request){
        $fieldType = filter_var($request->users, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if($fieldType == 'email'){
          $request->validate([
            'users'=>'required|email|exists:investors,email',
            'password'=>'required|min:5|max:45'
        ],[
            'users.required'=>'Email or Username is required',
            'users.email'=>'Invalid email address',
            'users.exists'=>'Email is not exists in system',
            'password.required'=>'Password is required'
        ]);

        }else{
            $request->validate([
                'users'=>'required|exists:investors,username',
                'password'=>'required|min:5|max:45'
            ],[
                'users.required'=>'Email or Username is required',
                'users.exists'=>'Username is not exists in system',
                'password.required'=>'Password is salah'
            ]);
        }

        $creds = array(
            $fieldType =>$request->users,
            'password' =>$request->password
        ); 

        if( Auth::guard('investor')->attempt($creds) ){
            return redirect()->route('investor.dashboard');
        }else{
            session()->flash('fail', 'Incorrect credentials'); 
            return redirect()->route('investor.login');
        }
    }
    public function logoutHandler(Request $request){
        Auth::guard('investor')->logout();
        session()->flash('fail', 'You are logged out!');
        return redirect()->route('investor.login');
    }
    public function sendPasswordResetLink(Request $request){
        $request->validate([
            'email'=>'required|email|exists:investors,email'
        ],[
            'email.required'=>'The :attribute is required',
            'email.email'=>'Invalid email address',
            'email.exists'=>'The :email is not exists in system'
        ]);
        //get investor details
        $investor = Investor::where('email',$request->email)->first();

        //generate token
        $token = base64_encode(Str::random(64));

        //check
        $oldToken = DB::table('password_reset_tokens')
                    ->where(['email'=>$request->email,'guard'=>constGuards::INVESTOR])
                    ->first();

        if ($oldToken) {
            //update token
            DB::table('password_reset_tokens')
                ->where(['email'=>$request->email,'guard'=>constGuards::INVESTOR])
                ->update([
                    'token'=>$token,
                    'created_at'=>Carbon::now()
                ]);
        }else{
            DB::table('password_reset_tokens')->insert([
                'email'=>$request->email,
                'guard'=>constGuards::INVESTOR,
                'token'=>$token,
                'created_at'=>Carbon::now()
            ]);
        }

        $actionLink = route('investor.reset-password',['token'=>$token,'email'=>$request->email]);

        $data = array(
            'actionLink'=>$actionLink,
            'investor'=>$investor
        );
        $mail_body = view('email-templates.investor-forgot-email-template', $data)->render();

        $mailConfig = array(
            'mail_from_email'=>env('EMAIL_FROM_ADDRESS'),
            'mail_from_name'=>('EMAIL_FROM_NAME'),
            'mail_recipient_email'=>$investor->email,
            'mail_recipient_name'=>$investor->name,
            'mail_subject'=>'Reset password',
            'mail_body'=>$mail_body
        );

        if(sendEmail($mailConfig)){
            session()->flash('succsess','we have e-mailed your password reset link.');
            return redirect()->route('investor.forgot-password');

        }else{
            session()->flash('fail','Something went wrong!');
            return redirect()->route('investor.forgot-password');
        }
    }
}
