<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::prefix('/users')->name('users')->middleware('auth')->group(function () {
    Route::get('/list', [App\Http\Controllers\UsersController::class, 'list'])->name('list');

    Route::get('/create', [App\Http\Controllers\UsersController::class, 'create'])->name('create');
    Route::post('/add', [App\Http\Controllers\UsersController::class, 'add'])->name('add');

    Route::get('/edit/{id}', [App\Http\Controllers\UsersController::class, 'edit'])->name('edit');
    Route::post('/update', [App\Http\Controllers\UsersController::class, 'update'])->name('update');

    Route::get('/delete/{id}', [App\Http\Controllers\UsersController::class, 'delete'])->name('delete');
});
