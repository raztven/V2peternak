<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;


// HOME
Route::get('/', function () {
    return view('pages/home');
});

// GROUP DASHBOARD PAKAI MIDDLEWARE AUTH
Route::middleware(['auth'])->group(function () {
    // INDEX DASHBOARD
    Route::get('/dashboard/produk', [DashboardController::class, 'indas']);
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/contact', [DashboardController::class, 'incontact']);
    Route::get('/dashboard/berita', [DashboardController::class, 'innews']);

    // TAMBAH / EDIT
    Route::get('/dashboard/tambah', [BeritaController::class, 'index']);
    Route::get('/dashboard/tambahp', [ProdukController::class, 'index']);

    // CRUD BERITA
    Route::post('/berita/tambah', [BeritaController::class, 'tambah']);
    Route::get('/berita/delete/{id}', [BeritaController::class, 'delete']);
    Route::get('/berita/edit/{id}', [BeritaController::class, 'edit']);
    Route::post('/berita/update/{id}', [BeritaController::class, 'update']);

    // CRUD PRODUK
    Route::post('/produk/tambah', [ProdukController::class, 'tambah']);
    Route::get('/produk/edit/{produk}', [ProdukController::class, 'edit']);
    Route::post('/produk/update/{produk}', [ProdukController::class, 'update']);
    Route::get('/produk/delete/{produk}', [ProdukController::class, 'delete']);
    Route::get('/produk/add', function () {
        return view('admin/tambahproduk');
    });
});

// ROUTE PUBLIC
Route::get('/berita/{berita}', [BeritaController::class, 'show'])->name('berita.show');
Route::get('/news', [BeritaController::class, 'innews']);

Route::get('/produk', [ProdukController::class, 'toko']);
Route::get('/produk/{id}', [ProdukController::class, 'show'])->name('produk.show');
Route::get('/search', [ProdukController::class, 'search'])->name('produk.index');

Route::get('/checkout/{id}', [ProdukController::class, 'checkout'])->name('checkout');


Route::post('/contact/tambah', [ContactController::class, 'tambah']);

// AUTH
Route::get('/register', [AuthController::class, 'inreg']);
Route::post('/register/submit', [AuthController::class, 'resum']);
Route::get('/login', [AuthController::class, 'inlog'])->name('login');
Route::post('/login/submit', [AuthController::class, 'loginn']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
