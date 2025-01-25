<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\GoogleLoginController;
use App\Http\Controllers\JenisBukuController;
use App\Http\Controllers\PeminjamController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransaksiPeminjamanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});
Route::get('/auth/redirect', [GoogleLoginController::class, 'redirect'])->name('auth.redirect');
Route::get('/auth/google/call-back', [GoogleLoginController::class, 'callback']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // JENIS BUKU //
    route::resource('jenis_buku',JenisBukuController::class);
    // BUKU //
    route::resource('buku',BukuController::class);
    // PEMINJAM //
    route::resource('peminjam', PeminjamController::class);
    // TRANSAKSI PEMINJAMAN //
    route::get('/transaksi_peminjaman', [TransaksiPeminjamanController::class, 'index'])->name('transaksi_peminjaman.index');
    route::get('/transaksi_peminjaman/create', [TransaksiPeminjamanController::class, 'create'])->name('transaksi_peminjaman.create');
    route::post('/transaksi_peminjaman/create', [TransaksiPeminjamanController::class, 'store'])->name('transaksi_peminjaman.store');
    route::post('/transaksi_peminjaman/{id}', [TransaksiPeminjamanController::class,'change'])->name('transaksi_peminjaman.change');
    route::post('/transaksi_peminjaman/destroy/{id}', [TransaksiPeminjamanController::class,'destroy'])->name('transaksi_peminjaman.destroy');
    // TRANSAKSI PENGEMBALIAN //

    
});

require __DIR__.'/auth.php';
