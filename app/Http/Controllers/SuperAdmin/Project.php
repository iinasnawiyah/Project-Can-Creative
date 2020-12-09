<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Project extends Controller
{
    public function index(){
        return view ('beckend.super_admin.Project');
    }
    public function praproduksi(){
        return view ('beckend.super_admin.Project-praproduksi');
    }
    public function produksi(){
        return view ('beckend.super_admin.Project-produksi');
    }
    public function pascaproduksi(){
        return view ('beckend.super_admin.Project-pascaproduksi');
    }
    
}
