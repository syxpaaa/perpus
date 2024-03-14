<?php

use App\Http\Controllers\adminController;
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



//admin
Route::get('/',[adminController::class,'index']);
Route::get('login',[adminController::class,'login']);
Route::post('login',[adminController::class,'ceklogin']);

Route::get('registrasi',[adminController::class,'registrasi']);//->middleware(ValidasiAdmin::class,cekAdmin::class);
Route::get('tambahpetu',[adminController::class,'tambahpetu']);
Route::post('tambahpetu',[adminController::class,'simpen']);
Route::view('layout','adminlayot');

Route::get('buku',[adminController::class,'buku']);
Route::get('tambahbuku',[adminController::class,'tambahbuku']);
Route::post('tambahbuku',[adminController::class,'cektambahbuku']);
Route::get('edit/{id}',[adminController::class,'edit']);
Route::post('edit/{id}',[adminController::class,'update']);
Route::get('hapus/{id}',[adminController::class,'hapus']);


Route::get('kategori',[adminController::class,'kategori']);
Route::get('kategori/tambah',[adminController::class,'tambahkategori']);
Route::post('kategori/tambah',[adminController::class,'cektambahkategori']);
Route::get('kategori/hapus/{id}',[adminController::class,'hps']);
Route::get('kategori/edit/{id}',[adminController::class,'editt']);
Route::post('kategori/edit/{id}',[adminController::class,'updat']);