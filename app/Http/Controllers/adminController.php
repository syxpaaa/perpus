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
        if($p->where('username',$request->input('username'))->where('password',$request->input('password'))->exists()){
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
            'username'=>'required',
            'password'=>'required',
            'namalengkap'=>'required',
            'jeniskelamin'=>'required',
            'noHp'=>'required|max:13'
        ]);
        $p->create($request->all());
        if ($p->where('username',$request->input('username'))->where('password',$request->input('password'))->where('namalengkap',$request->input('namalengkap'))->where('jeniskelamin',$request->input('jeniskelamin'))->where('noHp',$request->input('noHp'))->exists()){
            return redirect('petugas')->with('pesan','registrasi berhasil');
        }
        return back()->with('pesan','registrasi gagal');
    }

    public function buku(){
        $inem = new buku();
        return view('admin.buku',['data'=>$inem->all()]);
    }
}
