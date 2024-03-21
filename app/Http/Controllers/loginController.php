<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\users;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function ceklogin(Request $request)
    {
        $p = new admin();
        $u = new users();
        if ($request->Username == '' || $request->password == '') {
            return back()->with('pesan', 'input tidak boleh kosong');
        } else {
            if ($u->where('Username', $request->Username)->where('password', $request->password)->exists()) {
                $user = $u->first();
                session(['user' => $user]);
                return redirect('/');
            } elseif ($p->where('Username', $request->Username)->where('password', $request->password)->exists()) {
                $petugas = $p->first();
                session(['petugas' => $petugas]);
                return redirect('/petugas');
            }
        }
    }
    public function keluar()
    {
        session()->flush();
        //return back();
        return redirect('/login');

    }
}
