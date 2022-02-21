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
Route::get('/pesan','NotifController@index');
Route::get('/pesan/sukses','NotifController@sukses');
Route::get('/pesan/peringatan','NotifController@peringatan');
Route::get('/pesan/gagal','NotifController@gagal');

Route::get('kamar', [App\Http\Controllers\KamarController::class, 'index'])->name('kamar');
Route::get('jadwal_dokter', [App\Http\Controllers\JadwalDokterController::class, 'index'])->name('jadwaldokter');
Route::get('data_dokter', [App\Http\Controllers\DataDokterController::class, 'index'])->name('datadokter');
Route::get('berita', [App\Http\Controllers\BeritaController::class, 'index'])->name('berita');
Route::get('berita/{id}', [App\Http\Controllers\BeritaKategoriController::class, 'index'])->name('berita');
Route::get('berita_detail/{id}', [App\Http\Controllers\BeritaDetailController::class, 'index'])->name('berita');
Route::get('kontak', [App\Http\Controllers\KontakController::class, 'index'])->name('kontak');
Route::post('dependent-dropdown', [App\Http\Controllers\DependentDropdownController::class, 'store'])->name('dependent-dropdown.store');
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
    ->middleware('auth');

Route::resource('kamar_bidan', \App\Http\Controllers\KamarBidanController::class)
    ->middleware('auth');

Route::resource('kamar_dewasa', \App\Http\Controllers\KamarDewasaController::class)
    ->middleware('auth');

Route::resource('kamar_icu', \App\Http\Controllers\KamarIcuController::class)
    ->middleware('auth');

Route::resource('kamar_perinatologi', \App\Http\Controllers\KamarPerinatologiController::class)
    ->middleware('auth');

Route::resource('kamar_utama', \App\Http\Controllers\KamarUtamaController::class)
    ->middleware('auth');

Route::resource('kategori_berita', \App\Http\Controllers\KategoriBeritaController::class)
    ->middleware('auth');

Route::resource('spesialis', \App\Http\Controllers\SpesialisController::class)
    ->middleware('auth');

Route::resource('dokter_jadwal', \App\Http\Controllers\DokterJadwalController::class)
    ->middleware('auth');