<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PengumumanController;
use Illuminate\Support\Facades\Route;

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

///////////////////// TINY MCE ///////////////////////
Route::post('/menus', [MenuController::class, 'menu_tinymce']);
Route::post('/berita-tinymce', [BeritaController::class, 'berita_tinymce']);
Route::post('/pengumuman-tinymce', [PengumumanController::class, 'pengumuman_tinymce']);
///////////////////// TINY MCE ///////////////////////

///////////////////// MENU ///////////////////////
Route::get('/home', [MenuController::class, 'index'])->name('menu.index');
Route::get('/menu/create', [MenuController::class, 'create_main_menu'])->name('create.main-menu');
Route::post('/menu/create/store', [MenuController::class, 'store'])->name('store.main-menu');
Route::get('/menu/{id}', [MenuController::class, 'edit'])->name('menu-submenu.edit');
Route::patch('/menu/edit/update/{id}', [MenuController::class, 'update'])->name('menu-submenu.update');
Route::delete('menu/destroy/{id}', [MenuController::class, 'destroy_menu'])->name('destroy.menu');
Route::delete('submenu/destroy/{id}', [MenuController::class, 'destroy_submenu'])->name('destroy.submenu');
///////////////////// MENU ///////////////////////

///////////////////// DOKUMEN ///////////////////////
Route::get('/dokumen', [DokumenController::class, 'index'])->name('dokumen.index');
Route::get('/dokumen/create', [DokumenController::class, 'create_main_menu'])->name('create.main-dokumen');
Route::post('/dokumen/create/store', [DokumenController::class, 'store'])->name('store.main-dokumen');
Route::get('/dokumen/edit/{id}', [DokumenController::class, 'edit'])->name('dokumen-submenu.edit');
Route::patch('/dokumen/edit/update/{id}', [DokumenController::class, 'update'])->name('dokumen-submenu.update');
Route::delete('/dokumen/destroy/{id}', [DokumenController::class, 'destroy_menu'])->name('destroy.dokumen');
Route::delete('/subdokumen/destroy/{id}', [DokumenController::class, 'destroy'])->name('destroy.dokumen-submenu');

Route::get('/dokumen/submenu/{id}', [DokumenController::class, 'submenu_index'])->name('dokumen-submenu.index');
Route::get('/dokumen/submenu/store/{id}', [DokumenController::class, 'create_submenu'])->name('dokumen-submenu.create');
///////////////////// DOKUMEN ///////////////////////

///////////////////// RESOURCES ///////////////////////
Route::resource('/berita', BeritaController::class);
Route::resource('/pengumuman', PengumumanController::class);
Route::resource('/galeri', GaleriController::class);
///////////////////// RESOURCES ///////////////////////

///////////////////// SUB MENU ///////////////////////
Route::get('/submenu/{id}', [MenuController::class, 'submenu_index'])->name('submenu.index');
Route::get('/submenu/store/{id}', [MenuController::class, 'create_submenu'])->name('submenu.create');
///////////////////// SUB MENU ///////////////////////

///////////////////// FRONT END ///////////////////////
Route::get('/', [FrontEndController::class, 'index'])->name('dashboard');
Route::get('/konten/{id}', [FrontEndController::class, 'content_single'])->name('content.single');
Route::get('/news/{slug}', [FrontEndController::class, 'berita_single'])->name('berita.single');
Route::get('/announce/{slug}', [FrontEndController::class, 'pengumuman_single'])->name('pengumuman.single');
Route::get('/document', [FrontEndController::class, 'dokumen_single'])->name('document.single');
Route::get('/news', [FrontEndController::class, 'berita'])->name('berita.index');
///////////////////// FRONT END ///////////////////////
