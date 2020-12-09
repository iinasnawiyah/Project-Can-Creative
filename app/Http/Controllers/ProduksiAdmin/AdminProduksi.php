<?php

namespace App\Http\Controllers\ProduksiAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminProduksi extends Controller
{
    public function index()
    {
        return view('beckend.admin_produksi.Dashboard');
    }
}
