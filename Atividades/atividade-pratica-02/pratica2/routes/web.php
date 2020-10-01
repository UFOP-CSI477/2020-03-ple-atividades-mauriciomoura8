<?php

use Illuminate\Support\Facades\Route;


use App\Models\User;
use App\Models\Equipamento;
use App\Models\Registro;

Use App\Http\Controllers\UserController;
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

    return view('paginainicial');
})->name('paginainicial');

Route::resource('/users', UserController::class);

Route::resource('/registros', RegistroController::class);

Route::resource('/equipamentos', EquipamentoController::class);