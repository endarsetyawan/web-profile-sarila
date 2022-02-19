<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KontakController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\ViewController::class, 'index'])->name('home');

Route::get('jadwal_dokter', function () {
    return view('jadwal');
});

Route::get('kamar', [App\Http\Controllers\KamarController::class, 'index'])->name('kamar');
Route::get('jadwal_dokter', [App\Http\Controllers\JadwalDokterController::class, 'index'])->name('jadwaldokter');
Route::get('data_dokter', [App\Http\Controllers\DataDokterController::class, 'index'])->name('datadokter');
Route::get('berita', [App\Http\Controllers\BeritaController::class, 'index'])->name('berita');
Route::get('berita/{id}', [App\Http\Controllers\BeritaKategoriController::class, 'index'])->name('berita');
Route::get('berita_detail/{id}', [App\Http\Controllers\BeritaDetailController::class, 'index'])->name('berita');
Route::get('kontak', [App\Http\Controllers\KontakController::class, 'index'])->name('kontak');

Route::post('send-email', 'App\Http\Controllers\KontakController@sendEmail');
Route::resource('pengguna', \App\Http\Controllers\PenggunaController::class);
//Route::get('officer', [App\Http\Controllers\OfficeController::class, 'index'])->name('office');
//Route::resource('kontak/send', [App\Http\Controllers\KontakController::class, 'sendEmail'])->name('kontak');
Route::get('/pendaftaran', function () {
    return view('pendaftaran');
}); 
Route::get('/officer', function () {
    return view('admin/login/login');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
->name('home')
->middleware('auth');

Route::resource('kamar_anak', \App\Http\Controllers\KamarAnakController::class)
    ->middleware('auth')
    ->middleware('checkRole:1'); 