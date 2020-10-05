<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class relatorioregistrocontroller extends Controller
{

public function index(){
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
}

}