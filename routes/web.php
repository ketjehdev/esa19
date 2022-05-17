<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ItSupportController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VerifikatorController;
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
    return view('index');
})->name('index');


Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'cekrole:Admin'], function () {
        // admin page
        route::get('/admin/index', [AdminController::class, 'index'])->name('admin/index');

        // admin user 
        route::get('/admin/user', [AdminController::class, 'user'])->name('admin/user');
        route::post('/admin/user', [AdminController::class, 'userStore']);
        route::get('/admin/edit/{id}', [AdminController::class, 'editUser']);
        route::post('/admin/edit/{id}', [AdminController::class, 'updateUser']);
        route::get('/admin/delUser/{id}', [AdminController::class, 'delUser']);

        // admin forms
        route::get('/admin/form', [AdminController::class, 'form'])->name('admin/form');
        route::post('/admin/form', [AdminController::class, 'formStore']);
        route::post('/admin/form/{id}', [AdminController::class, 'statusForm']);
        route::get('/admin/delForm/{id}', [AdminController::class, 'delForm']);
        route::get('/admin/editGB/{id}', [AdminController::class, 'editGB']);
        route::post('/admin/editGB/{id}', [AdminController::class, 'UpdateGB']);

        //admin report 
        route::get('/admin/report', [AdminController::class, 'report'])->name('admin/report');
        route::get('/admin/destroyEduxart/{id}', [AdminController::class, 'destroyEduxart']);
        route::get('/admin/destroySport/{id}', [AdminController::class, 'destroySport']);
        route::get('/admin/destroyAmity/{id}', [AdminController::class, 'destroyAmity']);


        // admin sertifikat
        route::get('/admin/sertifikat', [AdminController::class, 'sertifikat'])->name('admin/sertifikat');
        route::post('/admin/sertifikat', [AdminController::class, 'sertifikatStore']);
        route::get('/admin/sertifikat/{id}', [AdminController::class, 'delSertif']);
    });

    // ============================================================================
    Route::group(['middleware' => 'cekrole:Verifikator'], function () {
        // verifikator index
        route::get('/verifikator/index', [VerifikatorController::class, 'index'])->name('verifikator/index');
        route::post('/verifikator/eduxart/{id}', [VerifikatorController::class, 'eduxart']);
        route::post('/verifikator/sport/{id}', [VerifikatorController::class, 'sport']);
        route::post('/verifikator/amity/{id}', [VerifikatorController::class, 'amity']);
        route::get('/verifikator/destroyEduxart/{id}', [VerifikatorController::class, 'destroyEduxart']);
        route::get('/verifikator/destroySport/{id}', [VerifikatorController::class, 'destroySport']);
        route::get('/verifikator/destroyAmity/{id}', [VerifikatorController::class, 'destroyAmity']);
    });

    // ===========================================================================
    Route::group(['middleware' => 'cekrole:IT SUPPORT'], function () {
        // it support index
        route::get('/it/index', [ItSupportController::class, 'index'])->name('it/index');
    });
});

// ===========================================================================
// users pendaftaran
Route::get('/users/form', [UsersController::class, 'form'])->name('users/form');
Route::get('/users/daftar/{id}', [UsersController::class, 'daftar']);
Route::post('/users/daftar', [UsersController::class, 'daftarCreate']);
Route::get('/users/daftar2/{id}', [UsersController::class, 'daftar2']);
Route::post('/users/daftar2', [UsersController::class, 'daftarCreate2']);
Route::post('/users/daftar3', [UsersController::class, 'daftarCreate3']);
Route::get('/users/pionering/{id}', [UsersController::class, 'pionering']);
Route::post('/users/pionering', [UsersController::class, 'pioneringCreate']);
Route::get('/users/popup', function () {
    return view('users.popup');
})->name('users/popup');

// users contact
Route::get('/users/contact', [UsersController::class, 'contact'])->name('users/contact');

// users sertifikat
Route::get('/users/sertifikat', [UsersController::class, 'sertifikat'])->name('users/sertifikat');

// login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
