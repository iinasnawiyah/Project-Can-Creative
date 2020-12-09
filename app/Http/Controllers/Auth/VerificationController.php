<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }

    // public function verifyEmail($email, $secret, $admin_type=null){
    //     $email = \base64_encode($email);
    //     $secret = \base64_encode($secret);
    //     $admin_type = $admin_type?\base64_decode($admin_type):null;

    //     if ($admin_type){
    //         $admin = \APP\Model\ucfirst($admin_type)::where('email', $email)->where('verification_code', $secret)->first();

    //     }else{
    //         $admin = \APP\Model\Admin::where('email', $email)->where('verification_code', $secret)->first();
    //     }


    //     if ($admin){

    //         $admin -> is_verified =1;
    //         $admin->save();

    //         if ($admin_type){
    //             if(Auth::guard($admin_type)->check()){
    //                 return \redirect("/{$admin_type}/dashboard?email_verified=true");
    //             }
    //             return \redirect("/login/{$admin_type}?email_verified=true");
    //         }else{
    //             if (Auth::check()){
    //                 return \redirect("/{$admin_type}?email_verified=true");
    //             }
    //             return \redirect("/login?email_verified=true");
    //         }
    //         else {
    //             return$admin_type? \redirect("/login{$admin_type}?email_verified=false") : \redirect("/login?email_verified=false");
    //         }
    //     }
    // }
}
