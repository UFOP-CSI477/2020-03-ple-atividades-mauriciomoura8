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



Route::resource('/administrativo', AdministrativoController::class);

Route::resource('/players', PlayerController::class);

Route::resource('/jogos', JogoController::class);

Route::resource('/tabela', TabelaController::class);