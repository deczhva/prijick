<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BalitaController;
use App\Http\Controllers\LansiaController;
use App\Http\Controllers\VitaminAController;
use App\Http\Controllers\NewMemberController;
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

// Route::post('/balita/add', [BalitaController::class, 'storeBalita']);
Route::get('/balita', [BalitaController::class, 'index'])->name('balita.index');
Route::post('/balita/store', [BalitaController::class, 'store'])->name('balita.store');
Route::delete('/balita/delete/{$id}', [BalitaController::class, 'destroy'])->name('balita.delete');


Route::get('/lansia', [LansiaController::class, 'index']);
Route::get('/vitamin', [VitaminAController::class, 'index']);



Route::get('/member', [NewMemberController::class, 'index'])->name('member.index');
Route::get('/member/store', [NewMemberController::class, 'store'])->name('member.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
