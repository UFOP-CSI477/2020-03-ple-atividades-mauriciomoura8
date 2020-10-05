<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agendamento;


class AreaGeralController extends Controller
{

public function index(){
         $cont = Agendamento::join('pessoas', 'agendamentos.pessoa_id', '=', 'pessoas.id')

        ->orderBy('data', 'desc')
        ->orderBy('pessoas.nome', 'asc')
        ->get('agendamentos.*');

       
        return view('geral.index', ['cont' => $cont]);
}
}
