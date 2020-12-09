<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//SuperAdmin dashboard
Route::get('superadmin', 'SuperAdmin\superadmin@index')->name('superadmin');
Route::get('superadmin.admindivisi', 'SuperAdmin\AdminDivisi@index')->name('superadmin.admindivisi');
Route::get('superadmin.admindivisi.adminaccount', 'SuperAdmin\AdminDivisi@adminaccount')->name('superadmin.admindivisi.adminaccount');
Route::get('superadmin.admindivisi.admininfo', 'SuperAdmin\AdminDivisi@admininfo')->name('superadmin.admindivisi.admininfo');
Route::get('superadmin.admindivisi.adminproduksi', 'SuperAdmin\AdminDivisi@adminproduksi')->name('superadmin.admindivisi.adminproduksi');

//super admin tambah admin ini jdi route nambah admin yg mana
Route::get('superadmin.tambahadmindivisi', 'SuperAdmin\AdminDivisi@tambah')->name('superadmin.tambahadmindivisi'); //tambah admin produksi
Route::post('superadmin.tambahadmindivisi', 'SuperAdmin\AdminDivisi@simpan')->name('prosestambah_admindivisi');
Route::get('superadmin.tambahadmin_account', 'SuperAdmin\AdminDivisi@tambah_adm_account')->name('superadmin.tambahadmin_account'); //tambah admin account
Route::post('superadmin.tambahadmin_account', 'SuperAdmin\AdminDivisi@simpan_adm_account')->name('prosesTambahadmin_account');
Route::get('superadmin.tambahadmin_info', 'SuperAdmin\AdminDivisi@tambah_adm_info')->name('superadmin.tambahadmin_info'); //tambah admin account
Route::post('superadmin.tambahadmin_info', 'SuperAdmin\AdminDivisi@simpan_adm_info')->name('prosestambahadmin_info');


Route::get('superadmin.project', 'SuperAdmin\Project@index')->name('superadmin.project');
Route::get('superadmin.project.praproduksi', 'SuperAdmin\Project@praproduksi')->name('superadmin.project.praproduksi');
Route::get('superadmin.project.produksi', 'SuperAdmin\Project@produksi')->name('superadmin.project.produksi');
Route::get('superadmin.project.pascaproduksi', 'SuperAdmin\Project@pascaproduksi')->name('superadmin.project.pascaproduksi');



Route::get('superadmin.user', 'SuperAdmin\User@index')->name('superadmin.user');
//super admin hapus 
Route::get('hapus_data/{admin}/destroy', 'SuperAdmin\AdminDivisi@destroy'); // hapus admin produksi


//Admin account dashboard
Route::get('AdminAccount', 'AdminAccount\AdminAccount@index')->name('AdminAccount');
Route::get('AdminAccount.tambahprojek', 'AdminAccount\Project@index')->name('AdminAccount.tambahprojek');

Route::get('AdminAccount.project', 'AdminAccount\Project@index')->name('AdminAccount.project');
Route::get('AdminAccount.project.praproduksi', 'AdminAccount\Project@praproduksi')->name('AdminAccount.project.praproduksi');
Route::get('AdminAccount.project.produksi', 'AdminAccount\Project@produksi')->name('AdminAccount.project.produksi');
Route::get('AdminAccount.project.pascaproduksi', 'AdminAccount\Project@pascaproduksi')->name('AdminAccount.project.pascaproduksi');

Route::get('AdminAccount.admindivisi', 'AdminAccount\AdminDivisi@index')->name('AdminAccount.admindivisi');
Route::get('AdminAccount.admindivisi.adminaccount', 'AdminAccount\AdminDivisi@adminaccount')->name('AdminAccount.admindivisi.adminaccount');
Route::get('AdminAccount.admindivisi.admininfo', 'AdminAccount\AdminDivisi@admininfo')->name('AdminAccount.admindivisi.admininfo');
Route::get('AdminAccount.admindivisi.adminproduksi', 'AdminAccount\AdminDivisi@adminproduksi')->name('AdminAccount.admindivisi.adminproduksi');

//admin info dasboard
Route::get('Admininfo', 'InfoAdmin\Admininfo@index')->name('Admininfo');


//admin produksi dashboard
Route::get('AdminProduksi', 'ProduksiAdmin\AdminProduksi@index')->name('AdminProduksi');
Route::get('AdminProduksi.ticket', 'AdminAccount\Project@index')->name('AdminAccount.dataticket');

Route::get('AdminProduksi.project', 'AdminAccount\Project@index')->name('AdminAccount.project');
Route::get('AdminAccount.project.praproduksi', 'AdminAccount\Project@praproduksi')->name('AdminAccount.project.praproduksi');
Route::get('AdminAccount.project.produksi', 'AdminAccount\Project@produksi')->name('AdminAccount.project.produksi');
Route::get('AdminAccount.project.pascaproduksi', 'AdminAccount\Project@pascaproduksi')->name('AdminAccount.project.pascaproduksi');

Route::get('AdminAccount.admindivisi', 'AdminAccount\AdminDivisi@index')->name('AdminAccount.admindivisi');
Route::get('AdminAccount.admindivisi.adminaccount', 'AdminAccount\AdminDivisi@adminaccount')->name('AdminAccount.admindivisi.adminaccount');
Route::get('AdminAccount.admindivisi.admininfo', 'AdminAccount\AdminDivisi@admininfo')->name('AdminAccount.admindivisi.admininfo');
Route::get('AdminAccount.admindivisi.adminproduksi', 'AdminAccount\AdminDivisi@adminproduksi')->name('AdminAccount.admindivisi.adminproduksi');





//auth login
Route::post('/admin/login', 'AdminAuthController@postLogin');
Route::get('register', 'AdminAuthController@showRegister');
// Route::post('register', 'AdminAuthController@register');



Route::get('/user', 'UserAuthController@home');
// Route::get('verify/{email}/{secret}/{?uer_type}', 'Auth\verificationController@verifyEmail');


Route::get('/', 'AuthController@showFormLogin')->name('login');
Route::get('login', 'AuthController@showFormLogin')->name('login');
Route::post('login', 'AuthController@login')->name('prosesLogin');
Route::get('register', 'AuthController@showFormRegister')->name('register');
Route::post('register', 'AuthController@register');

Route::group(['middleware' => 'auth'], function () {

    Route::get('home', 'HomeController@index')->name('home');
    Route::get('logout', 'AuthController@logout')->name('logout');
});
