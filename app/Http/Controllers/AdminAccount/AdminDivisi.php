<?php

namespace App\Http\Controllers\AdminAccount;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDivisi extends Controller
{
    public function index(){
        return view ('beckend.admin_account.AdminDivisi');
    }
    public function adminaccount(){
        return view ('beckend.admin_account.AdminDivisi_adminaccount');
    }
    public function admininfo(){
        return view ('beckend.admin_account.AdminDivisi_admininfo');

    }
    public function adminproduksi(){
        return view ('beckend.admin_account.AdminDivisi_adminproduksi');

    }
}
