<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\buku;
use App\Models\kategoribuku;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(){
        return view('admin.dasbor');
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
        $inem = new admin();
        return view('admin.registrasi',['data'=>$inem->all()]);
    }
    public function tambahpetu(){
        return view('admin.tambahpetu');
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
            return redirect('registrasi')->with('pesan','registrasi berhasil');
        }
        return back()->with('pesan','registrasi gagal');
    }

    public function buku(){
        $inem = new buku();
        return view('admin.buku',['data'=>$inem->all()]);
    }
    
    public function tambahBuku()
    {
        return view('admin.tambahbuku');
    }
    public function cektambahbuku(Request $request){
        $m = new buku();
        $cek = $request->validate([
            'Judul'=>'required',
            'Penulis'=>'required',            
            'Penerbit'=>'required',             
            'TahunTerbit'=>'required',
            'stok'=>'required',
            'KategoriID'=>'required'
        ]);
        $m->create($request->all());
        return redirect('buku');
    }
    public function hapus($id){
        $p = new buku();
        $p = $p->find($id);
        $p->delete();
        return back();
    }

    public function edit($id){
        $p = new buku();
        return view('admin.editbuku',['editbu'=>$p->find($id)]);
    }
    public function update(Request $request,$id){
        $p = new buku();
        $validasi = $request->validate([
            'Judul'=>'required',
            'Penulis'=>'required',            
            'Penerbit'=>'required',             
            'TahunTerbit'=>'required',
            'stok'=>'required',
            'KategoriID'=>'required'
        ]);
        $p = $p->find($id)->update($request->all());
        return redirect('buku')->with('Pesan','Update Buku Berhasil');
    }

    public function kategori(){
        $inem = new kategoribuku();
        return view('admin.kategori',['data'=>$inem->all()]);
    }

    public function tambahkategori()
    {
        return view('admin.tambahkategori');
    }
    public function cektambahkategori(Request $request){
        $m = new kategoribuku();
        $cek = $request->validate([
            'Namakategoori'=>'required'
        ]);
        $m->create($request->all());
        return redirect('kategori');
    }

    public function hps($id){
        $p = new kategoribuku();
        $p = $p->find($id);
        $p->delete();
        return back();
    }
    public function editt($id){
        $p = new kategoribuku();
        return view('admin.editkategori',['editka'=>$p->find($id)]);
    }

    public function updat(Request $request,$id){
        $p = new kategoribuku();
        $validasi = $request->validate([
            'Namakategoori'=>'required'
        ]);
        $p = $p->find($id)->update($request->all());
        return redirect('buku')->with('Pesan','Update Buku Berhasil');
    }

}
