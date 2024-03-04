<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\buku;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(){
        return view('adminlayot');
    }
    public function login(){
        return view('admin.login');
    }

    public function ceklogin(Request $request){
        $p = new admin();
        if($p->where('Username',$request->input('Username'))->where('password',$request->input('password'))->exists()){
         $petugas = $p->first();
        session(['petugas'=>$petugas]);
         return redirect('/');
        }
        return back()->with('pesan','username dan password belum terdaftar');
    }


    public function registrasi(){
        return view('admin.registrasi');
    }

    public function simpen(request $request){
        $p =new admin();
        $cek=$request->validate([
            'Username'=>'required',
            'password'=>'required',
            'email'=>'required',
            'namalengkap'=>'required',
            'noHp'=>'required|max:13'
        ]);
        $p->create($request->all());
        if ($p->where('Username',$request->input('Username'))->where('password',$request->input('password'))->where('email',$request->input('email'))->where('namalengkap',$request->input('namalengkap'))->where('noHp',$request->input('noHp'))->exists()){
            return redirect('/')->with('pesan','registrasi berhasil');
        }
        return back()->with('pesan','registrasi gagal');
    }

    public function buku(){
        $inem = new buku();
        return view('admin.buku',['data'=>$inem->all()]);
    }


}