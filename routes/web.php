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
Route::get('buku',[adminController::class,'buku']);//->middleware(ValidasiAdmin::class,cekAdmin::class);
Route::get('login',[adminController::class,'login']);
Route::post('login',[adminController::class,'ceklogin']);

Route::get('registrasi',[AdminController::class,'registrasi']);//->middleware(ValidasiAdmin::class,cekAdmin::class);
Route::post('registrasi',[AdminController::class,'simpen']);
