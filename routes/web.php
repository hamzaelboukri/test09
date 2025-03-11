<?php

use App\Http\Controllers\AutController;
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

Route::get('/register', [AutController::class, 'index'])->name('register.show');
Route::post('/register', [AutController::class, 'register'])->name('register');
Route::get('/login', [AutController::class, 'show'])->name('login.show');
Route::post('/login', [AutController::class, 'login'])->name('login');
Route::post('/logout', [AutController::class, 'logout'])->name('logout');
