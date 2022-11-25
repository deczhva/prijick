<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BalitaController;
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
    return view('index', [
        "title" => "Dashboard"
    ]);
});

Route::get('/data-ibu', function () {
    return view('data-ibu', [
        "title" => "Data Ibu"
    ]);
});

Route::get('/data-anak', function () {
    return view('data-anak', [
    ]);
});

Route::get('/data-imunisasi', function () {
    return view('data-imunisasi', [
        "title" => "Data Imunisasi"
    ]);
});

Route::get('/data-vitamin', function () {
    return view('data-vitamin', [
        "title" => "Data Vitamin A"
    ]);
});

Route::get('/data-kader', function () {
    return view('data-kader', [
        "title" => "Data Kader"
    ]);
});

Route::get('/data-lansia', function () {
    return view('data-lansia', [
        "title" => "Data Lansia"
    ]);
});

// Route::get('/', 'PagesController@dashboard');
// Route::get('/data-ibu', 'PagesController@data-ibu');
// Route::get('/data-anak', 'PagesController@data-anak');
// Route::get('/data-imunisasi', 'PagesController@data-imunisasi');
// Route::get('/data-vitamin', 'PagesController@data-vitamin');
// Route::get('/data-kader', 'PagesController@data-kader');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
