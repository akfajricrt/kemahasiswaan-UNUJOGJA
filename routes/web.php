<?php


use App\Http\Controllers\AgendaController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BloggerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\OrmawaController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\KetentuanController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PrestationController;
use App\Http\Controllers\Admin\ServicesController;



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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');


Route::get('/kode-etik', [KetentuanController::class, 'kode_etik'])->name('kode-etik');
Route::get('/tata-laksana-ormawa', [KetentuanController::class, 'tata_laksana'])->name('tata-laksana-ormawa');


Route::get('/category', [BlogController::class, 'index'])->name('category');
Route::get('/category/blog', [BloggerController::class, 'index'])->name('blog');
Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda');
Route::get('/ormawa', [OrmawaController::class, 'index'])->name('ormawa');
Route::get('/prestasi', [PrestasiController::class, 'index'])->name('prestasi');
Route::get('/prestasi/create', [PrestasiController::class, 'create'])->name('prestasi.create');
Route::post('/success', [PrestasiController::class, 'store']);
Route::post('/tembus', [LayananController::class, 'store']);

 



Route::prefix('admin')
    ->middleware(['auth', 'admin','verified'])
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        Route::resource('prestation', PrestationController::class);
        Route::resource('complaint', ServicesController::class);
    });

Auth::routes([
    'verify'=>true,

    // 'register' => false
    
]);
