<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\peminjamController;
use App\Http\Middleware\cekAdmin;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[peminjamController::class,'index']);

//admin
Route::view('layout','adminlayot');
Route::get('petugas',[adminController::class,'index']);

Route::get('login',[loginController::class,'login']);
Route::post('login',[loginController::class,'ceklogin']);
Route::get('keluar',[loginController::class,'keluar']);

Route::get('registrasi',[adminController::class,'registrasi']);//->middleware(ValidasiAdmin::class,cekAdmin::class);
Route::get('registrasi/tambah',[adminController::class,'tambahpetu']);
Route::post('registrasi/tambah',[adminController::class,'simpen']);
Route::get('registrasi/edit/{id}',[adminController::class,'edi']);
Route::post('registrasi/edit/{id}',[adminController::class,'upda']);
Route::get('registrasi/hapus/{id}',[adminController::class,'hapu']);

Route::get('buku',[adminController::class,'buku']);
Route::get('buku/tambah',[adminController::class,'tambahbuku']);
Route::post('buku/tambah',[adminController::class,'cektambahbuku']);
Route::get('buku/edit/{id}',[adminController::class,'edit']);
Route::post('buku/edit/{id}',[adminController::class,'update']);
Route::get('buku/hapus/{id}',[adminController::class,'hapus']);

Route::get('kategori',[adminController::class,'kategori']);
Route::get('kategori/tambah',[adminController::class,'tambahkategori']);
Route::post('kategori/tambah',[adminController::class,'cektambahkategori']);
Route::get('kategori/hapus/{id}',[adminController::class,'hps']);
Route::get('kategori/edit/{id}',[adminController::class,'editt']);
Route::post('kategori/edit/{id}',[adminController::class,'updat']);