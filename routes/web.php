<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\RekapController;
use App\Http\Controllers\UserController;
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

Route::get('/', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);

//route user
Route::group(['middleware' => ['auth', 'cekLevel:Pegawai']], function(){

    Route::get('/presensi', [AbsensiController::class, 'index']);
    Route::post('/absen', [AbsensiController::class, 'simpan']);
    Route::get('/profil', [ProfilController::class, 'index']);
});

//route admin
Route::group(['middleware' => ['auth', 'cekLevel:Admin']], function(){

    Route::get('/admin', [UserController::class, 'index']);
    Route::get('/tambah-pegawai', [UserController::class, 'tambahPegawai']);
    Route::post('/tambah-pegawai', [UserController::class, 'store']);
    Route::get('/rekap', [RekapController::class, 'index']);

});