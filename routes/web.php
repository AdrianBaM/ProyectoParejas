<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\miscelaneosController;
use App\Http\Controllers\Dashboard\medicinasController;
use App\Http\Controllers\Dashboard\farmacosController;
use App\Http\Controllers\Dashboard\LoginController;
use App\Models\medicinas;
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


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('login', 'login')->name('login')->middleware('guest');
route::resource('post', medicinasController::class)->middleware('auth');
route::resource('far', farmacosController::class);
route::resource('mis', miscelaneosController::class);
/* Route::resource('medicinas', 'App\Http\Controllers\MedicinaController'); */


Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout']);