<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{
    public function index()
    {
        return view('input/index', ['kategoriuser'=>'Admin']);
    }

    public function form()
    {
        $ar_lokasi = ["Jakarta", "Semarang", "Bandung", "Lombok"];
        return view('input/form', ['lokasi'=>$ar_lokasi]);
    }

    public function hasil(Request $request){
        $nama = $request->input('nama');
        $email = $request->input('email');
        $lokasi = $request->input('lokasi');
        $jenis_kelamin = $request->input('jenis_kelamin');
        $skill = $request->input('skill');
        return view('input/hasil',
            ['nama'=>$nama, 'email'=>$email, 'lokasi'=>$lokasi, 'jenis_kelamin'=>$jenis_kelamin, 'skill'=>$skill]);
    }
}
