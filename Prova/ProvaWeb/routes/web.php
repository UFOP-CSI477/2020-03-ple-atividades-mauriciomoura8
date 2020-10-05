<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaGeralController;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\AdministrativoController;
use App\Http\Controllers\ColetaController;
use App\Http\Controllers\AgendamentoController;
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


Route::resource('/geral', AreaGeralController::class);

Route::resource('/pessoas', PessoaController::class);

Route::resource('/agendamentos', AgendamentoController::class);

Route::resource('/coletas', ColetaController::class);

Route::resource('/administrativo', AdministrativoController::class)->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
