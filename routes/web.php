<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard')->middleware('auth');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/register_post', [AuthController::class, 'register_post'])->name('register_post');

Route::get('/reset_password', [AuthController::class, 'reset_password'])->name('reset_password');
Route::get('/reset_password_post', [AuthController::class, 'reset_password_post'])->name('reset_password_post');