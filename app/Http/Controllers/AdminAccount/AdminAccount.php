<?php

namespace App\Http\Controllers\AdminAccount;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAccount extends Controller
{
    public function index(){
        return view ('beckend.admin_account.Dashboard');
    }
}
