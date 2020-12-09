<?php

namespace App\Http\Controllers\InfoAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminInfo extends Controller
{
    public function index()
    {
        return view('beckend.admin_info.Dashboard');
    }
}
