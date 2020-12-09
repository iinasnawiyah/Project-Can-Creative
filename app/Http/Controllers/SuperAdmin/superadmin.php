<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class superadmin extends Controller
{
    public function index(){
        return view ('beckend.super_admin.Dashboard');
    }
}
