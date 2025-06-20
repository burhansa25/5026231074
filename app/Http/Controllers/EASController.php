<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EASController extends Controller
{
    //
    public function index()
	{
		$nilai = DB::table('nilai')->get();
		return view('index',['nilai' => $nilai]);

	}

	public function tambahdata()
	{

		return view('tambahdata');

	}


	public function storedata(Request $request)
	{

		DB::table('nilai')->insert([
			'nomorinduksiswa' => $request->nomorinduksiswa,
			'nilaiangka' => $request->nilaiangka,
			'sks' => $request->sks
		]);

		return redirect('/eas');
	}
}
