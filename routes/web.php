<?php

use App\Http\Controllers\adminController;
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
