<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
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

// Admin grup rotası
Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index'); // Admin ana sayfası için view döndürüldü
    })->name('admin_index'); // Route'a admin_index adı verildi
});

// Anasayfa rotası
Route::get('/', function () {
    return view('front.index'); // Ana sayfa için view döndürüldü
})->name('index'); // Route'a index adı verildi
