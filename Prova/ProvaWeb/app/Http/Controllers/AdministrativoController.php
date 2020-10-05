<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;
use App\Models\Coleta;

class AdministrativoController extends Controller
{

public function index(){
        $coletas = Coleta::orderBy('nome')->get();
        $pessoas = Pessoa::orderBy('nome')->get();
        return view('administrativo.index', ['pessoas'=>$pessoas], ['coletas'=>$coletas]);

}
}
