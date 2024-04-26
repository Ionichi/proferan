<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\FormController;
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

Route::get('/', function () {
    return view('index');
});

// Authentication
Route::prefix('auth')->middleware('guest')->group(function() {
    Route::get('/login', [LoginController::class, 'index'])->name('auth.login.view');
    Route::post('/login', [LoginController::class, 'login'])->name('auth.login');

    Route::get('/admin/login', [LoginController::class, 'index_admin'])->name('auth.admin.login.view');
    Route::post('/admin/login', [LoginController::class, 'login_admin'])->name('auth.admin.login');

    Route::get('/register', [RegisterController::class, 'index'])->name('auth.register.view');
    Route::post('/register', [RegisterController::class, 'register'])->name('auth.register');
});


// User Panel
Route::middleware('auth')->group(function() {
    Route::post('/logout', [LoginController::class, 'logout'])->name('auth.logout');
    
    Route::get('/dashboard', function() {
        return view('pages.dashboard.index');
    });
});


// Admin Panel
Route::prefix('admin')->middleware(['auth:admin'])->group(function() {
    Route::post('/logout', [LoginController::class, 'logout_admin'])->name('auth.admin.logout');

    Route::get('/dashboard', function() {
        return view('pages.dashboard.index');
    });
});

Route::get('/pemasukkan', [FormController::class, 'pemasukkan'])->name('form.pemasukkan');
Route::get('/pengeluaran', [FormController::class, 'pengeluaran'])->name('form.pemasukkan');
Route::get('/utang', [FormController::class, 'utang'])->name('form.utang');
Route::get('/piutang', [FormController::class, 'piutang'])->name('form.piutang');