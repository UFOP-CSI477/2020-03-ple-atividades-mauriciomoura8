<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use App\Models\Player;
use Illuminate\Http\Request;

class AdministrativoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
        return view ('administrativo.index' );
    }


}