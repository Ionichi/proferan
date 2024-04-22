<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::prefix('auth')->group(function() {
    Route::get('/login', [LoginController::class, 'index'])->name('auth.login.view');
    Route::post('/login', [LoginController::class, 'login'])->name('auth.login');

    Route::get('/register', [RegisterController::class, 'index'])->name('auth.register.view');
    Route::post('/register', [RegisterController::class, 'register'])->name('auth.register');
});


Route::middleware('auth')->group(function() {
    Route::post('/logout', [LoginController::class, 'logout'])->name('auth.logout');
    
    Route::get('/dashboard', function() {
        return view('pages.dashboard.index');
    });
});