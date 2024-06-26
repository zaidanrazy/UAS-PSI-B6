<?php

use App\Models\Barang;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StokController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PinjamController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\JenisBarangController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\LaporanControlller;
use App\Models\Peminjaman;

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
//     return view('welcome');
// });

// Route::get('/login', function () {
//     return view('login.index');
// });

Route::middleware(['guest'])->group(function () {
    Route::get('/', fn () => redirect('login'));
    Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login.store');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return view('layout.home.index', [
            "active open" => "home",
        ]);
    })->name('home');

    Route::resource('group', GroupController::class);
    Route::resource('databarang', BarangController::class)->middleware('auth');
    Route::resource('user', UserController::class)->middleware('auth')->middleware('admin');
    Route::resource('jenisBarang', JenisBarangController::class)->middleware('auth');
    Route::resource('peminjam', PeminjamanController::class)->middleware('auth');
    Route::put('peminjaman/{peminjaman}/accepted', [PeminjamanController::class, 'acc'])->name('peminjaman.acc')->middleware('auth');
    Route::put('peminjaman/{peminjaman}/declined', [PeminjamanController::class, 'refuse'])->name('peminjaman.declined')->middleware('auth');
    // Route::put('peminjaman/{peminjaman}/end', [PeminjamanController::class, 'end'])->name('peminjaman.selesai');

    Route::put('pinjam/{peminjaman}/kembalikan', [PinjamController::class, 'kembalikan'])->name('pinjam.kembalikan')->middleware('auth');
    // Route::get('laporan', [LaporanController::class, 'index'])->name('laporan.index');
    Route::get('cetak', [PeminjamanController::class, 'cetak'])->name('UIO');

    Route::resource('laporan', LaporanController::class)->middleware('auth');
    Route::resource('pinjam', PinjamController::class)->middleware('auth');
    Route::resource('pengembalian', PengembalianController::class)->middleware('auth');

    Route::resource('admin', AdminController::class)->middleware('admin');


    // ->middleware('admin');

    // Route::resource('stok', StokController::class);
    // Route::resource('gruop', GroupController::class);




    // Route::get('/peminjaman', function () {
    //     return view('layout.peminjam.index', [
    //         'barang' => \App\Models\Barang::all()
    //     ]);
    // })->name('peminjam');



    // Route::get('/user', function () {
    //     return view('layout.user.index', [
    //         "active open" => "user",
    //     ]);
    // })->name('user.index');

    Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');
});

// Route::get('databarang/{databarang}/edit', [BarangController::class, 'edit'])->name('databarang.edit');


// Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
// Route::post('/login', [LoginController::class, 'authenticate']);
