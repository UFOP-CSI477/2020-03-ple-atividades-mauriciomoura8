<?php

use Illuminate\Support\Facades\Route;


use App\Models\User;
use App\Models\Equipamento;
use App\Models\Registro;

use App\Http\Controllers\UserController;
use App\Http\Controllers\EquipamentoController;
use App\Http\Controllers\RegistroController;

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

    return view('/paginainicial');
})->name('paginainicial');

Route::resource('/users', UserController::class);

Route::resource('/registros', RegistroController::class);

Route::resource('/equipamentos', EquipamentoController::class);

Route::get('/areageraladm', function(){

    $equipamentos = Equipamento::orderBy('name')->get();
    $registros = Registro::orderBy('datalimite')->get();

    $container = Array();
    
    foreach($equipamentos as $e){

        $verify = Registro::where('equipamento_id', '=', $e->id)->get();

        if(sizeof($verify)>0){
            $container[$e->nome] = $verify;
        }
    }
        

    return view('areageraladm', ['equipamentos'=> $equipamentos, 'registros' => $registros, 'container' => $container]);
})->name('areageraladm')->middleware('auth');

Route::get('/areageralsuporte', function(){

    return view('areageralsuporte');
})->name('areageralsuporte');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/manuequipamento', function(){

    $equipamentos = Equipamento::orderBy('name')->get();
    $registros = Registro::orderBy('datalimite')->get();
    $users = Registro::orderBy('id')->get();

    $container = Array();
    $lista = Equipamento::get();
    
    foreach($lista as $e){

        $verify = Registro::where('equipamento_id', '=', $e->id)->get();

        if(sizeof($verify)>0){
            $container[$e->nome] = $verify;
        }
    }
        

    return view('manuequipamentos', ['equipamentos'=> $equipamentos, 'registros' => $registros, 'container' => $container, 'users' => $users]);
})->name('manuequipamentos');

Route::resource('/manuequipamentos', relatorioregistrocontroller::class)->middleware('auth');