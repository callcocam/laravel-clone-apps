<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/burger', function () {
    return view('burger');
})->middleware(['auth'])->name('burger');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/twitter', function () {
    return redirect()->route('twitter.dashboard');
})->middleware(['auth'])->name('twitter');

Route::get('/twitter/dashboard', function () {
    return view('twitter.dashboard');
})->middleware(['auth'])->name('twitter.dashboard');

Route::get('/admin', function () {
    return redirect()->route('admin.dashboard');
})->middleware(['auth'])->name('admin');

Route::get('/admin/dashboard', [\App\Http\Controllers\AdminController::class, 'index'])->middleware(['auth'])->name('admin.dashboard');

require __DIR__.'/auth.php';
