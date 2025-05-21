<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    // di sini ada variabel $nama, sebelumnya kosong
    public function index($nama){
    	return $nama; // ini hanya return variable, tidak ada view
    }
    public function formulir(){

    	return view('formulir');

    }

    public function proses(Request $request){
        $nama = $request->input('nama');
     	$alamat = $request->input('alamat');
        return "Nama : ".$nama."<br> Alamat : ".$alamat. "<br> Aslinya: " . $request;
    }
}
