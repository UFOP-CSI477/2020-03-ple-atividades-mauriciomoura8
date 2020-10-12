<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jogo;


class TabelaController extends Controller
{

public function index(){

        $jogos = Jogo::orderBy('id')->get();
        return view('tabela.index', ['jogos' => $jogos]);

}
}
