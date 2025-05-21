<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;
use App\Http\Controllers\MyController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;


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

Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']); // ini nyambung ke PegawaiController


Route::get('/formulir', [PegawaiController::class, 'formulir']); // halaman isian formulir
Route::post('/formulir/proses', [PegawaiController::class, 'proses']); // redirect action form, ini juga buat aman (encrypted)

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);
