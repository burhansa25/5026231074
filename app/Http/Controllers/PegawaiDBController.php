<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiDBController extends Controller
{
    //
    public function index()
	{
    	// mengambil data dari table pegawai
		// $pegawai = DB::table('pegawai')->get(); //array all record
		$pegawai = DB::table('pegawai')->paginate(10); //paginate 10 record per page
        // $pegawai = DB::table('pegawai')->orderBy('pegawai_id', 'desc')->get(); //mengurutkan data berdasarkan id pegawai secara descending

        // echo $pegawai; // untuk melihat data pegawai
        // dd($pegawai); // untuk melihat data pegawai dalam format yang lebih mudah dibaca

    	// mengirim data pegawai ke view index
		return view('indexp',['pegawai' => $pegawai]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('tambah');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('pegawai')->insert([
			'pegawai_nama' => $request->nama,
			'pegawai_jabatan' => $request->jabatan,
			'pegawai_umur' => $request->umur,
			'pegawai_alamat' => $request->alamat
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/pegawai');

	}

    public function proses(Request $request)
    {
        $this->validate($request,[
           'nama' => 'required|min:5|max:20',
           'jabatan' => 'required',
           'umur' => 'required|numeric',
           'alamat' => 'required'
        ]);

        return view('proses',['data' => $request]);
    }

	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$pegawai = DB::table('pegawai')
            ->where('pegawai_id',$id)
            ->get();

		// passing data pegawai yang didapat ke view edit.blade.php
		return view('edit',['pegawai' => $pegawai]);

	}

	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('pegawai')->where('pegawai_id',$request->id)->update([
			'pegawai_nama' => $request->nama,
			'pegawai_jabatan' => $request->jabatan,
			'pegawai_umur' => $request->umur,
			'pegawai_alamat' => $request->alamat
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/pegawai');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('pegawai')->where('pegawai_id',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/pegawai');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$pegawai = DB::table('pegawai')
		->where('pegawai_nama','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('index',['pegawai' => $pegawai]);

	}


    public function index2()
	{
		$kue = DB::table('kue')->paginate(10);
		return view('index2',['kue' => $kue]);

	}

	// method untuk menampilkan view form tambah kue
	public function tambahKue()
	{

		// memanggil view tambah
		return view('tambahKue');

	}

	// method untuk insert data ke table kue
	public function storeKue(Request $request)
	{
		// insert data ke table kue
		DB::table('kue')->insert([
			'merkkue' => $request->merkkue,
			'hargakue' => $request->hargakue,
			'tersedia' => $request->tersedia,
			'berat' => $request->berat
		]);
		// alihkan halaman ke halaman kue
		return redirect('/kue');

	}

    // public function proses(Request $request)
    // {
    //     $this->validate($request,[
    //        'nama' => 'required|min:5|max:20',
    //        'jabatan' => 'required',
    //        'umur' => 'required|numeric',
    //        'alamat' => 'required'
    //     ]);

    //     return view('proses',['data' => $request]);
    // }

	// method untuk edit data kue
	public function editKue($ID)
	{
		// mengambil data kue berdasarkan id yang dipilih
		$kue = DB::table('kue')
            ->where('id',$ID)
            ->get();

		// passing data kue yang didapat ke view edit.blade.php
		return view('editKue',['kue' => $kue]);

	}

	// update data kue
	public function updateKue(Request $request)
	{
		// update data kue
		DB::table('kue')->where('id',$request->id)->update([
			'merkkue' => $request->merkkue,
			'hargakue' => $request->hargakue,
			'tersedia' => $request->tersedia,
            'berat' => $request->berat
		]);
		// alihkan halaman ke halaman kue
		return redirect('/kue');
	}

	// method untuk hapus data pegawai
	public function hapusKue($ID)
	{
		// menghapus data kue berdasarkan id yang dipilih
		DB::table('kue')->where('ID',$ID)->delete();

		// alihkan halaman ke halaman kue
		return redirect('/kue');
	}

    public function cariKue(Request $request)
	{
		// menangkap data pencarian
		$cariKue = $request->cariKue;

    		// mengambil data dari table kue sesuai pencarian data
		$kue = DB::table('kue')
		->where('merkkue','like',"%".$cariKue."%")
		->paginate();

    		// mengirim data kue ke view index
		return view('index2',['kue' => $kue]);

	}


    public function indexX2()
	{
		$karyawan = DB::table('karyawan')->paginate(10);
		return view('x2/index',['karyawan' => $karyawan]);

	}

	// method untuk menampilkan view form tambah karyawan
	public function tambahKaryawan()
	{

		// memanggil view tambah
		return view('x2/tambah');

	}

	// method untuk insert data ke table karyawan
	public function storeKaryawan(Request $request)
	{
		// insert data ke table karyawan
		DB::table('karyawan')->insert([
			'kodepegawai' => $request->kodepegawai,
			'namalengkap' => $request->namalengkap,
			'divisi' => $request->divisi,
			'departemen' => $request->departemen
		]);
		// alihkan halaman ke halaman karyawan
		return redirect('/karyawan');
	}


	// method untuk edit data karyawan
	public function editKaryawan($kodepegawai)
	{
		// mengambil data karyawan berdasarkan kodepegawai yang dipilih
		$karyawan = DB::table('karyawan')
            ->where('kodepegawai', $kodepegawai)
            ->get();

		// passing data karyawan yang didapat ke view edit.blade.php
		return view('x2/edit',['karyawan' => $karyawan]);

	}

	// update data karyawan
	public function updateKaryawan(Request $request)
	{
		// update data karyawan
		DB::table('karyawan')->where('kodepegawai',$request->kodepegawai)->update([
			'namalengkap' => $request->namalengkap,
			'divisi' => $request->divisi,
			'departemen' => $request->departemen
		]);
		// alihkan halaman ke halaman karyawan
		return redirect('/karyawan');
	}

	// method untuk hapus data pegawai
	public function hapusKaryawan($kodepegawai)
	{
		// menghapus data karyawan berdasarkan kodepegawai yang dipilih
		DB::table('karyawan')->where('kodepegawai',$kodepegawai)->delete();

		// alihkan halaman ke halaman karyawan
		return redirect('/karyawan');
	}

    public function cariKaryawan(Request $request)
	{
		// menangkap data pencarian
		$cariKaryawan = $request->cariKaryawan;

    		// mengambil data dari table karyawan sesuai pencarian data
		$karyawan = DB::table('karyawan')
		->where('namalengkap','like',"%".$cariKaryawan."%")
		->paginate();

    		// mengirim data karyawan ke view index
		return view('x2/index',['karyawan' => $karyawan]);

	}


    public function indexD4()
	{
		$keranjangbelanja = DB::table('keranjangbelanja')->paginate(10);
		return view('d4/index',['keranjangbelanja' => $keranjangbelanja]);

	}

	// method untuk menampilkan view form tambah karyawan
	public function tambahBarang()
	{

		// memanggil view tambah
		return view('d4/tambah');

	}

	// method untuk insert data ke table karyawan
	public function storeBarang(Request $request)
	{
		// insert data ke table karyawan
		DB::table('keranjangbelanja')->insert([
			'ID' => $request->ID,
			'KodeBarang' => $request->kodebarang,
			'Jumlah' => $request->jumlah,
			'Harga' => $request->harga
		]);
		// alihkan halaman ke halaman karyawan
		return redirect('/keranjangbelanja');
	}


	// method untuk edit data karyawan
	public function editBarang($ID)
	{
		// mengambil data karyawan berdasarkan kodepegawai yang dipilih
		$barang = DB::table('keranjangbelanja')
            ->where('ID', $ID)
            ->get();

		// passing data karyawan yang didapat ke view edit.blade.php
		return view('d4/edit',['barang' => $barang]);

	}

	// update data karyawan
	public function updateBarang(Request $request)
	{
		// update data karyawan
		DB::table('keranjangbelanja')->where('ID',$request->ID)->update([
			'KodeBarang' => $request->kodebarang,
			'Jumlah' => $request->jumlah,
			'Harga' => $request->harga
		]);
		// alihkan halaman ke halaman karyawan
		return redirect('/keranjangbelanja');
	}

	// method untuk hapus data pegawai
	public function hapusBarang($ID)
	{
		// menghapus data karyawan berdasarkan ID yang dipilih
		DB::table('keranjangbelanja')->where('ID',$ID)->delete();

		// alihkan halaman ke halaman karyawan
		return redirect('/keranjangbelanja');
	}

    public function cariBarang(Request $request)
	{
		// menangkap data pencarian
		$cariBarang = $request->cariBarang;

    		// mengambil data dari table karyawan sesuai pencarian data
		$barang = DB::table('keranjangbelanja')
		->where('KodeBarang','like',"%".$cariBarang."%")
		->paginate();

    		// mengirim data karyawan ke view index
		return view('d4/index',['keranjangbelanja' => $keranjangbelanja]);

	}

    public function indexA1()
    {
        // Middleware can be added here if needed
        $counter = DB::table('pagecounter')->where('ID', 1)->first();
        $jumlahpengunjung = 0;
        if ($counter) {
            $newjumlah = $counter->Jumlah + 1;
            DB::table('pagecounter')->where('ID', 1)->update(['Jumlah' => $newjumlah]);
        }

        $jumlahpengunjung = $newjumlah;
        return view('a1/index', ['jumlahpengunjung' => $jumlahpengunjung]);
    }
}
