<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use constGuards;
use constDefaults;
use App\Models\umkm;
use Illuminate\Support\Facades\DB;
use  Illuminate\Support\Facades\Hash;
use  Illuminate\Support\Str;
use  Illuminate\Support\Carbon;

class UmkmController extends Controller
{
    public function loginHandler(Request $request){
        $fieldType = filter_var($request->users, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if($fieldType == 'email'){
          $request->validate([
            'users'=>'required|email|exists:umkms,email',
            'password'=>'required|min:5|max:45'
        ],[
            'users.required'=>'Email or Username is required',
            'users.email'=>'Invalid email address',
            'users.exists'=>'Email is not exists in system',
            'password.required'=>'Password is required'
        ]);

        }else{
            $request->validate([
                'users'=>'required|exists:umkms,username',
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

        if( Auth::guard('umkm')->attempt($creds) ){
            return redirect()->route('umkm.home');
        }else{
            session()->flash('fail', 'Incorrect credentials'); 
            return redirect()->route('umkm.login');
        }
    }
    public function logoutHandler(Request $request){
        Auth::guard('umkm')->logout();
        session()->flash('fail', 'You are logged out!');
        return redirect()->route('umkm.login');
    }
    public function sendPasswordResetLink(Request $request){
        $request->validate([
            'email'=>'required|email|exists:umkms,email'
        ],[
            'email.required'=>'The :attribute is required',
            'email.email'=>'Invalid email address',
            'email.exists'=>'The :email is not exists in system'
        ]);
        //get umkm details
        $umkm = Umkm::where('email',$request->email)->first();

        //generate token
        $token = base64_encode(Str::random(64));

        //check
        $oldToken = DB::table('password_reset_tokens')
                    ->where(['email'=>$request->email,'guard'=>constGuards::UMKM])
                    ->first();

        if ($oldToken) {
            //update token
            DB::table('password_reset_tokens')
                ->where(['email'=>$request->email,'guard'=>constGuards::UMKM])
                ->update([
                    'token'=>$token,
                    'created_at'=>Carbon::now()
                ]);
        }else{
            DB::table('password_reset_tokens')->insert([
                'email'=>$request->email,
                'guard'=>constGuards::UMKM,
                'token'=>$token,
                'created_at'=>Carbon::now()
            ]);
        }

        $actionLink = route('umkm.reset-password',['token'=>$token,'email'=>$request->email]);

        $data = array(
            'actionLink'=>$actionLink,
            'umkm'=>$umkm
        );
        $mail_body = view('email-templates.umkm-forgot-email-template', $data)->render();

        $mailConfig = array(
            'mail_from_email'=>env('EMAIL_FROM_ADDRESS'),
            'mail_from_name'=>('EMAIL_FROM_NAME'),
            'mail_recipient_email'=>$umkm->email,
            'mail_recipient_name'=>$umkm->name,
            'mail_subject'=>'Reset password',
            'mail_body'=>$mail_body
        );

        if(sendEmail($mailConfig)){
            session()->flash('succsess','we have e-mailed your password reset link.');
            return redirect()->route('umkm.forgot-password');

        }else{
            session()->flash('fail','Something went wrong!');
            return redirect()->route('umkm.forgot-password');
        }
    }
}

