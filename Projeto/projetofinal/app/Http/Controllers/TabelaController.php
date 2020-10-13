<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jogo;
use App\Models\Jogo_Player;

class TabelaController extends Controller
{

public function index(){

        $jogos = Jogo::orderBy('id')->get();
        
        return view('tabela.index', ['jogos' => $jogos]);

}
}
