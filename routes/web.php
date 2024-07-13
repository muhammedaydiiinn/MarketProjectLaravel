<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;

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

// Giriş ve çıkış rotaları
Route::get('/login', [AuthManager::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthManager::class, 'login']);
Route::post('/logout', [AuthManager::class, 'logout'])->name('logout');

// Kayıt formu rotası
Route::get('/register', [AuthManager::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthManager::class, 'register']);

// Genel ürün listesi
Route::get('/', function () {
    // Tüm ürünleri listele
})->name('index');

// Admin paneli rotaları (auth middleware ile korunuyor)
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', function () {
        // Admin panelini göster
    })->name('admin.dashboard');

    Route::get('/products', function () {
        // Admin panelinde ürünleri listele
    })->name('admin.products');
});
