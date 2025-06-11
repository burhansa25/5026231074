<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;
use App\Http\Controllers\MyController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// System.out.println("Hello World");
// Route::get() {

Route::get('/', function () {
    return view('welcome');
});

Route::get('/selamat', function () {
    return view('welcome');
});

Route::get('/halo', function () {
    return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

Route::get('blog', function () {
	return view('blog');
});

// Versi baru
Route::get('hello', [Coba::class, 'helloword']);

// Versi lama
// Route::get('hello', App\Http\Controllers\Coba::helloworld);


// TUGAS
Route::get('frontend', function () {
	return view('frontend');
});

Route::get('tugas1', [MyController::class, 'alchemist1']);
Route::get('tugas2bootstrap', [MyController::class, 'alchemist2']);
Route::get('tugas3bootstrap', [MyController::class, 'alchemist3']);
Route::get('tugas4layouting', [MyController::class, 'alchemist4']);
Route::get('tugas5js', [MyController::class, 'alchemist5']);
Route::get('tugas6js', [MyController::class, 'alchemist6']);
Route::get('tugas7linktree', [MyController::class, 'alchemist7']);
Route::get('tugasets', [MyController::class, 'alchemist8']);

// Di Kelas
Route::get('dosen', [Coba::class, 'index']);

//Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']); // ini nyambung ke PegawaiController


Route::get('/formulir', [PegawaiController::class, 'formulir']); // halaman isian formulir
Route::post('/formulir/proses', [PegawaiController::class, 'proses']); // redirect action form, ini juga buat aman (encrypted)

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//route CRUD
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
//route CRUD
Route::get('/pegawai/tambah/', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);

// pertemuan 14 (pencarian, filter, pagination)
Route::get('/pegawai/cari',[PegawaiDBController::class,'cari']);

// Tugas CRUD: Kue
//route CRUD
Route::get('/kue', [PegawaiDBController::class, 'index2']);
//route CRUD
Route::get('/kue/tambahKue/', [PegawaiDBController::class, 'tambahKue']);
Route::post('/kue/storeKue', [PegawaiDBController::class, 'storeKue']);
Route::get('/kue/editKue/{ID}', [PegawaiDBController::class, 'editKue']);
Route::post('/kue/updateKue', [PegawaiDBController::class, 'updateKue']);
Route::get('/kue/hapusKue/{ID}', [PegawaiDBController::class, 'hapusKue']);

// pertemuan 14 (pencarian, filter, pagination)
Route::get('/kue/cariKue',[PegawaiDBController::class,'cariKue']);


// Latihan 1: Soal X2 Karyawan
//route CRUD
Route::get('/karyawan', [PegawaiDBController::class, 'indexX2']);
//route CRUD
Route::get('/karyawan/tambahKaryawan/', [PegawaiDBController::class, 'tambahKaryawan']);
Route::post('/karyawan/storeKaryawan', [PegawaiDBController::class, 'storeKaryawan']);
Route::get('/karyawan/editKaryawan/{ID}', [PegawaiDBController::class, 'editKaryawan']);
Route::post('/karyawan/updateKaryawan', [PegawaiDBController::class, 'updateKaryawan']);
Route::get('/karyawan/hapusKaryawan/{ID}', [PegawaiDBController::class, 'hapusKaryawan']);

Route::get('/karyawan/cariKaryawan',[PegawaiDBController::class,'cariKaryawan']);

// Latihan 2: Soal D4 Keranjang Belanja
//route CRUD
Route::get('/keranjangbelanja', [PegawaiDBController::class, 'indexD4']);
//route CRUD
Route::get('/keranjangbelanja/tambahBarang/', [PegawaiDBController::class, 'tambahBarang']);
Route::post('/keranjangbelanja/storeBarang', [PegawaiDBController::class, 'storeBarang']);
Route::get('/keranjangbelanja/editBarang/{ID}', [PegawaiDBController::class, 'editBarang']);
Route::post('/keranjangbelanja/updateBarang', [PegawaiDBController::class, 'updateBarang']);
Route::get('/keranjangbelanja/hapusBarang/{ID}', [PegawaiDBController::class, 'hapusBarang']);

Route::get('/keranjangbelanja/cariBarang',[PegawaiDBController::class,'cariBarang']);

// Latihan 3: Soal A1 Page Counter
//route CRUD
Route::get('/pagecounter', [PegawaiDBController::class, 'indexA1']);
