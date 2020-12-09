<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\admin;
use Illuminate\Support\Facades\DB;

class AdminDivisi extends Controller
{
    public function index()
    {
        $admin = DB::table('admin')->get();
        return view('beckend.super_admin.AdminDivisi', ['admin' => $admin]);
    }


    //admin account
    public function adminaccount()
    {
        $admin = admin::where('adm_role', '=', '1')->get();
        return view('beckend.super_admin.AdminDivisi_adminaccount', ['admin' => $admin]);
    }

    public function tambah_adm_account()
    {

        return view('beckend.super_admin.Tambahadmin_account');
    }
    public function simpan_adm_account(Request $request)
    {
        // dd($request->all());
        $admin = admin::create([

            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make('$request->password'),
            'alamat' => $request->alamat,
            'adm_role' => $request->adm_role,

        ]);

        return redirect()->route('superadmin.admindivisi.adminaccount')->with('status', 'Data Admin Berhasil Ditambahkan!');
        // ('beckend.super_admin.AdminDivisi_adminproduksi')
    }

    public function destroy_adm_account(Admin $admin)
    {
        Admin::destroy($admin->id);
        return redirect('/superadmin.admindivisi.adminaccount')->with('status', 'Data Wisata Berhasil Dihapus!');
    }


    //admin info
    public function admininfo()
    {

        $admin = admin::where('adm_role', '=', '4')->get();
        return view('beckend.super_admin.AdminDivisi_admininfo', ['admin' => $admin]);
    }
    public function tambah_adm_info()
    {

        return view('beckend.super_admin.TambahAdmin_info');
    }
    public function simpan_adm_info(Request $request)
    {
        $admin = admin::create([

            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'alamat' => $request->alamat,
            'adm_role' => $request->adm_role,

        ]);
        return redirect()->route('superadmin.admindivisi.admininfo')->with('status', 'Data Admin Berhasil Ditambahkan!');
        // ('beckend.super_admin.AdminDivisi_adminproduksi')
    }

    public function destroy_adm_info(Admin $admin)
    {
        Admin::destroy($admin->id);
        return redirect('/superadmin.admindivisi.admininfo')->with('status', 'Data Wisata Berhasil Dihapus!');
    }




    //admin produksi
    public function adminproduksi()
    {
        $admin = admin::where('adm_role', '=', '3')->get();
        return view('beckend.super_admin.AdminDivisi_adminproduksi', ['admin' => $admin]);
    }


    public function tambah()
    {

        return view('beckend.super_admin.TambahAdminDivisi');
    }
    public function simpan(Request $request)
    {

        // dd($request->all());
        $admin = admin::create([

            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'alamat' => $request->alamat,
            'adm_role' => $request->adm_role,
            'status' => "Nonaktif"

        ]);


        return redirect()->route('superadmin.admindivisi.adminproduksi')->with('status', 'Data Admin Berhasil Ditambahkan!');
        // ('beckend.super_admin.AdminDivisi_adminproduksi')
    }

    public function destroy(Admin $admin)
    {
        Admin::destroy($admin->id);
        return redirect('/superadmin.admindivisi.adminproduksi')->with('status', 'Data Wisata Berhasil Dihapus!');
    }
}
