<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TabelaController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\AdministrativoController;
use App\Http\Controllers\JogoController;



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
})->name('welcome');

Route::get('regras', function () {
    return view('regrasAssistencias');
})->name('regrasAssistencias');

Route::resource('/administrativo', AdministrativoController::class)->middleware('auth');

Route::resource('/players', PlayerController::class)->middleware('auth');

Route::resource('/jogos', JogoController::class)->middleware('auth');

Route::resource('/tabela', TabelaController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
