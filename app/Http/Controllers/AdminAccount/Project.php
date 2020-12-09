<?php

namespace App\Http\Controllers\AdminAccount;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Project extends Controller
{
    public function index(){
        return view ('beckend.admin_account.Project');
    }
    public function praproduksi(){
        return view ('beckend.admin_account.Project-praproduksi');
    }
    public function produksi(){
        return view ('beckend.admin_account.Project-produksi');
    }
    public function pascaproduksi(){
        return view ('beckend.admin_account.Project-pascaproduksi');
    }
}
