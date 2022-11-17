<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BalitaController;
use App\Http\Controllers\LansiaController;
use App\Http\Controllers\VitaminAController;
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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/balita', [BalitaController::class, 'index']);
Route::get('/lansia', [LansiaController::class, 'index']);
Route::get('/vitamin', [VitaminAController::class, 'index']);

Route::post('/balita/add', [BalitaController::class, 'storeBalita']);


