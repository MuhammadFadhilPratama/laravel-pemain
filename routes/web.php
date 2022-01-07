<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPemainController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PemainController;
use App\Http\Controllers\RegisterController;
use Illuminate\Contracts\Cache\Store;
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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/owner', function () {
    return view('owner', [
        "title" => "owner",
        "nama" => "MUHAMMAD FADHIL PRATAMA",
        "email" => "fadhilpratamaC3@gmail.com",
        "img" => "Fadhil.jpg"
    ]);
});

Route::get('player',[PemainController::class, 'index']);
Route::get('player/{pemain_detil:no_punggung}',[PemainController::class, 'show']);

Route::get('login',[LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('login',[LoginController::class, 'authenticate']);
Route::post('logout',[LoginController::class, 'logout']);

Route::get('register',[RegisterController::class, 'index'])->middleware('guest');
Route::post('register',[RegisterController::class, 'store']);

Route::get('dashboard',[DashboardController::class, 'index'])->middleware('auth');

Route::resource('dashboard/pemain', DashboardPemainController::class)->Middleware('auth');




