<?php

use App\Http\Controllers\PaketController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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
    return view('welcome');
});

// Route::get('/pakets', 'PaketController@index')->name('pakets');

Route::resource('pakets', PaketController::class);
Route::resource('admin', PaketController::class);
Route::resource('home', PaketController::class);
