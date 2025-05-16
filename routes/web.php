<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    PetaniAuthController,
    PetaniController,
    ProduksiBerasController,
    PadiController,
    ProdukController,
    BeritaController,
    HomeController,
    PengajuanPadiController,
    PengajuanSewaController
};

// ===========================
// Public Routes
// ===========================
Route::get('/', [HomeController::class, 'index'])->name('beranda');
Route::get('/berita/{id}', [HomeController::class, 'show'])->name('berita.show');

// ===========================
// Auth Redirect (role-based)
// ===========================
// Route::get('/redirect', function () {
//     if (!auth()->check()) {
//         return redirect()->route('login');
//     }

//     $user = auth()->user();

//     return match ($user->role) {
//         'admin' => redirect()->route('admin.dashboard'),
//         'petani' => redirect()->route('petani.dashboard'),
//         default => abort(403),
//     };
// })->middleware('auth')->name('redirect');

// ===========================
// Admin Routes
// ===========================
Route::prefix('admin')->middleware(['auth', 'role:admin'])->name('admin.')->group(function () {
    Route::get('/dashboard', fn () => view('admin.dashboard'))->name('dashboard');

    Route::resource('padi', PadiController::class)->names('padi');
    Route::resource('berita', BeritaController::class)->names('berita');
});

// ===========================
// Petani Routes
// ===========================
Route::prefix('petani')->middleware(['auth', 'role:petani'])->name('petani.')->group(function () {
    // Route::get('/dashboard', fn () => view('petani.dashboard'))->name('dashboard');

    // Penjualan Padi
//  Route::get('/penjualan-padi', [PengajuanPadiController::class, 'info'])->name('user.penjualan_padi.penjualanpadi');
    Route::get('/penjualan-padi', [PengajuanPadiController::class, 'penjualanView'])->name('user.penjualan_padi.penjualanpadi');
    // Pengajuan Sewa
    Route::get('/pengajuan-sewa', [PengajuanSewaController::class, 'index'])->name('pengajuan_sewa.index');
    Route::post('/pengajuan-sewa', [PengajuanSewaController::class, 'store'])->name('pengajuan_sewa.store');
    Route::put('/pengajuan-sewa/{id}', [PengajuanSewaController::class, 'update'])->name('pengajuan_sewa.update');
    Route::delete('/pengajuan-sewa/{id}', [PengajuanSewaController::class, 'destroy'])->name('pengajuan_sewa.destroy');

    // Produk
    Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
    Route::post('/produk/store', [ProdukController::class, 'store'])->name('produk.store');
    Route::post('/produk/update/{id}', [ProdukController::class, 'update'])->name('produk.update');
    Route::delete('/produk/delete/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy');

    // Produksi Beras
    Route::get('/produksi-beras', [ProduksiBerasController::class, 'index'])->name('produksi_beras.index');
    Route::post('/produksi-beras', [ProduksiBerasController::class, 'store'])->name('produksi_beras.store');
    Route::put('/produksi-beras/{id}', [ProduksiBerasController::class, 'update'])->name('produksi_beras.update');
    Route::delete('/produksi-beras/{id}', [ProduksiBerasController::class, 'destroy'])->name('produksi_beras.destroy');
});
