<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class peminjamController extends Controller
{
    public function index(){
        return view('peminjam.dasbor');
    }
}
