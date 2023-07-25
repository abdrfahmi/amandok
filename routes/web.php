<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KonfirmasiController;
use App\Http\Controllers\UserController;


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



//Surat Pengantar Laporan
Route::group(['middleware' => ['auth']], function() {
    Route::get('/cetakqr/{id}', [KonfirmasiController::class, 'cetakqr'])->name('cetakqr');

    Route::group(['middleware' => ['hakakses:4']], function() {
        Route::resource('/user', UserController::class);
        Route::resource('/laporan', LaporanController::class);
        Route::get('/alllaporan', [LaporanController::class, 'alllaporan'])->name('alllaporan');
        Route::get('suratpengantar', [LaporanController::class, 'suratpengantar'])->name('suratpengantar');
        Route::post('/konfirmasi/{id}', [KonfirmasiController::class, 'konfirmasi'])->name('konfirmasi');
        Route::get('/editlaporan/{id}', [LaporanController::class, 'editlaporan'])->name('editlaporan');
        Route::post('/updatelaporan/{id}', [LaporanController::class, 'updatelaporan'])->name('updatelaporan');
        Route::post('/deletetujuan', [KonfirmasiController::class, 'deletetujuan'])->name('deletetujuan');
        Route::get('/destroytujuan/{id}', [KonfirmasiController::class, 'destroytujuan'])->name('destroytujuan');
        Route::get('/dashboard',[LoginController::class, 'dashboard'])->name('dashboard');
    });
});


//Konfirmasi
Route::get('/konfirmasi/{id}/{token}', [KonfirmasiController::class, 'tampilkansptoken'])->name('tampilkansptoken');

// Authentication
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/proseslogin', [LoginController::class, 'proseslogin'])->name('proseslogin');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//Registrasion
Route::get('/registrasi', [LoginController::class, 'registrasi'])->name('registrasi');
Route::post('/prosesregistrasi', [UserController::class, 'prosesregistrasi'])->name('prosesregistrasi');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/modal', function () {
    return view('admin.modal');
});