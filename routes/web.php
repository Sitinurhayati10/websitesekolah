<?php

use App\Http\Controllers\SejarahSingkatController;
use App\Http\Controllers\VisiDanMisiController;
use App\Http\Controllers\StrukturOrganisasiController;
use App\Http\Controllers\DataProfilController;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\ManajemenSikapSiswaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\InfoPPDBController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
Route::get('/home/sejarahsingkat', [SejarahSingkatController::class, 'index'])->name('home.sejarahsingkat');
Route::get('/home/visidanmisi', [VisiDanMisiController::class, 'index'])->name('home.visidanmisi');
Route::get('/home/strukturorganisasi', [StrukturOrganisasiController::class, 'index'])->name('home.strukturorganisasi');
Route::get('/home/dataprofil', [DataProfilController::class, 'index'])->name('home.dataprofil');
Route::get('/home/kurikulum', [KurikulumController::class, 'index'])->name('home.kurikulum');
Route::get('/home/manajemensikapsiswa', [ManajemenSikapSiswaController::class, 'index'])->name('home.manajemensikapsiswa');
Route::get('/home/galeri', [GaleriController::class, 'index'])->name('home.galeri');
Route::get('/home/contact', [ContactController::class, 'index'])->name('home.contact');
Route::get('/home/infoppdb', [InfoPPDBController::class, 'index'])->name('home.infoppdb');
// Route::get('/histories', [App\Http\Controllers\HomeController::class, 'histories'])->name('home.histories');
// Route::get('/vision-missions', [App\Http\Controllers\HomeController::class, 'visions'])->name('home.visions');
// Route::get('/organizations', [App\Http\Controllers\HomeController::class, 'organizations'])->name('home.organizations');
// Route::get('/teachers', [App\Http\Controllers\HomeController::class, 'teachers'])->name('home.teachers');
// Route::get('/majors', [App\Http\Controllers\HomeController::class, 'major'])->name('home.major');
// Route::get('/events', [App\Http\Controllers\HomeController::class, 'events'])->name('home.events');
