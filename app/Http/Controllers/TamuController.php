<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TamuController extends Controller
{
    public function data() {
        return view('data');
    }

    public function daftar(Request $request) {
        $nama = $request -> input('nama');
        $alamat = $request -> input('alamat');
        $telp = $request -> input('telp');
        $email = $request -> input('email');
        $nik = $request -> input('nik');

        return view ('daftar', compact('nama', 'alamat', 'telp', 'email', 'nik'));
    }
}