<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
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

// Giriş ve çıkış rotaları
Route::get('/login', [AuthManager::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthManager::class, 'login']);
Route::post('/logout', [AuthManager::class, 'logout'])->name('logout');

// Kayıt formu rotası
Route::get('/register', [AuthManager::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthManager::class, 'register']);

Route::get('/', [ProductController::class, 'index'])->name('index');

// Admin paneli rotaları (auth middleware ile korunuyor)
Route::middleware(['auth'])->prefix('admin')->group(function () {
    // Admin paneli ana sayfa
    Route::get('/', [ProductController::class, 'admin'])->name('admin.dashboard');
});

// Kategoriye göre ürün listesi rotası
Route::get('/category/{slug}', [ProductCategoryController::class, 'show'])->name('category.products');
