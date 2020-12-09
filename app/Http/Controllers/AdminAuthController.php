<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Model\Admin;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use \Exception;


class AdminAuthController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        return view('/superadmin/Dashboard');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // $username = $request->email;
        // dd($username);


        // dd($auth);
        $akun = DB::table('admin')->where('email', $request->email)->first();
        if ($akun->email != null) {
            if (Hash::check($request->password, $akun->password)) {
                if ($akun->adm_role === 1) {
                    Auth::guard('adminutama');
                    Session::put('id', $akun->id);
                    Session::put('nama', $akun->name);
                    // echo "admin utama" . "nama : " . Session::get('nama');
                    return redirect()->route('AdminAccount');
                }
                if ($akun->adm_role === 2) {
                    Auth::guard('superadmin');
                    Session::put('id', $akun->id);
                    Session::put('nama', $akun->name);
                    return redirect()->route('superadmin');
                }
                if ($akun->adm_role === 3) {
                    Auth::guard('adminproduksi');
                    Session::put('id', $akun->id);
                    Session::put('nama', $akun->name);
                    return redirect('AdminProduksi');
                }
                if ($akun->adm_role === 4) {
                    Auth::guard('admininfo');
                    Session::put('id', $akun->id);
                    Session::put('nama', $akun->name);
                    return redirect('AdminInfo');
                }
            } else {
                return redirect()->route('login')->with('failedLogin', 'Password salah');
            }
        } else {
            return redirect()->route('login')->with('failedLogin', 'Email salah');
        }


        // public function showRegister()
        // {
        //     return view('auth.register');
        // }

        // public function register(Request $request)
        // {
        //     $rules = [
        //         'name'                  => 'required|min:3|max:35',
        //         'email'                 => 'required|email|unique:users,email',
        //         'password'              => 'required|confirmed'
        //     ];

        //     $messages = [
        //         'name.required'         => 'Nama Lengkap wajib diisi',
        //         'name.min'              => 'Nama lengkap minimal 3 karakter',
        //         'name.max'              => 'Nama lengkap maksimal 35 karakter',
        //         'email.required'        => 'Email wajib diisi',
        //         'email.email'           => 'Email tidak valid',
        //         'email.unique'          => 'Email sudah terdaftar',
        //         'password.required'     => 'Password wajib diisi',
        //         'password.confirmed'    => 'Password tidak sama dengan konfirmasi password'
        //     ];

        //     $validator = Validator::make($request->all(), $rules, $messages);

        //     if ($validator->fails()) {
        //         return redirect()->back()->withErrors($validator)->withInput($request->all);
        //     }

        //     $admin = new Admin();
        //     $admin->name = ucwords(strtolower($request->name));
        //     $admin->email = strtolower($request->email);
        //     $admin->password = Hash::make($request->password);
        //     $admin->email_verified_at = \Carbon\Carbon::now();
        //     $simpan = $admin->save();

        //     if ($simpan) {
        //         Session::flash('success', 'Register berhasil! Silahkan login untuk mengakses data');
        //         return redirect()->route('login');
        //     } else {
        //         Session::flash('errors', ['' => 'Register gagal! Silahkan ulangi beberapa saat lagi']);
        //         return redirect()->route('register');
        //     }
        // }

        // public function logout()
        // {
        //     Auth::logout(); // menghapus session yang aktif
        //     return redirect()->route('login');
        // }
        // if (Auth::attempt($request->only('email', 'password'))) {
        //     if (Auth::guard('admin')) {
        //         $request->session()->regenerate();
        //         $this->clearLoginAttempts($request);
        //         echo "berhasil";
        //     } else {
        //         return "gagal1";
        //     }
        // } else {
        //     return "Ggal";
        // }





        // public function register(Request $request){
        //     DB::Admin(function() use ($request){
        //         $this->guest = Admin::create(
        //             [
        //                 'name'=>$request->name,
        //                 'email'=>$request->email,
        //                 'password'=>$request->password,
        //                 'alamat'=>$request->alamat,
        //                 'verification_code'=substr(md5(rand),0,7)
        //             ]
        //             );

        //             $message='verify/'.\base64_encode($this->email).'/'.\base64_encode($guest->verification_code);
        //             $subject = 'Email Verification';
        //             Mail::to($this->email)->queue(new \APP\Mail\Verification($subject, $message));


        //     }
        // });





    }
}
