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
    return view('home');
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/testing', function () {
    return view('testing');
});

Route::get('/reservations', function () {
    return view('reservations');
})->middleware('auth');

Route::get('/reservingTable', function () {
    return view('reservingTable');
});

Route::get('/userProfile', function () {
    return view('userProfile');
})->middleware('auth');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
