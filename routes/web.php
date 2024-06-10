<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\kategoriController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\produkController;
use App\Http\Controllers\viewController;
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

// Route::get('/', function () {
//     return view('dashboard');
// });

Route::get('/', [viewController::class, 'dashboard'])->name('home');
Route::get('/admin', [viewController::class, 'admin'])->name('admin');
Route::get('/kategori', [viewController::class, 'kategori'])->name('kategori');
Route::get('/produk', [viewController::class, 'produk'])->name('produk');

Route::name('admin.')->group(function () {
    Route::get('/add-admin', [viewController::class, 'addAdmin'])->name('add');
    Route::post('/save-admin', [adminController::class, 'saveAdmin'])->name('save');
    Route::get('/edit-admin/{id}', [viewController::class, 'editAdmin'])->name('edit');
    Route::post('/update-admin', [adminController::class, 'updateAdmin'])->name('update');
    Route::get('/delete-admin/{id}', [adminController::class, 'deleteAdmin'])->name('delete');
});

Route::name('kategori.')->group(function () {
    Route::get('/add-kategori', [viewController::class, 'addKategori'])->name('add');
    Route::post('/save-kategori', [kategoriController::class, 'saveKategori'])->name('save');
    Route::get('/edit-kategori/{id}', [viewController::class, 'editKategori'])->name('edit');
    Route::post('/update-kategori', [kategoriController::class, 'updateKategori'])->name('update');
    Route::get('/delete-kategori/{id}', [kategoriController::class, 'deleteKategori'])->name('delete');
});

Route::name('produk.')->group(function () {
    Route::get('/add-produk', [viewController::class, 'addProduk'])->name('add');
    Route::post('/save-produk', [produkController::class, 'saveProduk'])->name('save');
    Route::get('/edit-produk/{id}', [viewController::class, 'editProduk'])->name('edit');
    Route::post('/update-produk', [produkController::class, 'updateProduk'])->name('update');
    Route::get('/delete-produk/{id}', [produkController::class, 'deleteProduk'])->name('delete');
});

Route::get('/landingPage', [LandingPageController::class, 'landingPage'])->name('landingPage');
