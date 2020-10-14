<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;
use App\Models\Player;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class JogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $jogos = Jogo::orderBy('id')->get();
        return view('jogos.index', ["jogos"=>$jogos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        if(Auth::check()){
        $players = Player::orderBy('nome')->get();
        $jogos = jogo::get();
        if(sizeof($players) < 16){
            session()->flash('mensagem', 'Número de mínimo players não atingido, cadastre mais players para iniciar o campeonato!');
            return view('administrativo.index');
    }

    else{
        return view('jogos.create', ['players'=>$players]); 
    }
    }
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $oitavas = DB::table('jogos')->where('fase', '8')->get();
       $quartas = DB::table('jogos')->where('fase', '4')->get();
       $semis = DB::table('jogos')->where('fase', '2')->get();
       $jogo = jogo::get();

        
        if(Auth::check()){
       if($request->fase == '8'){
        session()->flash('mensagem', 'Jogo registrado!');
        Jogo::create($request->all());
        return redirect()->route('administrativo.index');
        }

            if($request->fase == '4'){
                if(sizeof($oitavas) <= '8'){
                    session()->flash('mensagem', 'Você precisa cadastrar oitavas de final antes de cadastrar 4ªs de final!');
                    return redirect()->route('tabela.index');
                }
                else{
                    session()->flash('mensagem', 'Jogo registrado!');
                    Jogo::create($request->all());
                    return redirect()->route('administrativo.index');

                }
            }

            if($request->fase == '2'){
                if(sizeof($quartas) != '4'){
                    session()->flash('mensagem', 'Você precisa cadastrar quartas de final antes de cadastrar simi de finais!');
                    return redirect()->route('tabela.index');
                }
                else{
                    session()->flash('mensagem', 'Jogo registrado!');
                    Jogo::create($request->all());
                    return redirect()->route('administrativo.index');
                }
            }
            
            if($request->fase == '1'){
                if(sizeof($semis) != '2'){
                    session()->flash('mensagem', 'Você precisa cadastrar semi finais antes de cadastrar a grande de final!');
                    return redirect()->route('tabela.index');
                }
                else{
                    if($request->p1gols > $request->p2gols){
                        session()->flash('mensagem', 'O VENCEDOR DO TORNEIO FOI '.$request->player1);
                        Jogo::create($request->all());
                        DB::table('jogos')->truncate();
                        DB::table('players')->truncate();
                        return redirect()->route('welcome');
                        
                        }
            
                        else if($request->p2gols > $request->p1gols){
                            session()->flash('mensagem', 'O VENCEDOR DO TORNEIO FOI '.$request->player2);
                            Jogo::create($request->all());
                            DB::table('jogos')->truncate();
                            DB::table('players')->truncate();
                            return redirect()->route('welcome');
                    }
                }
            }
        }
    }

        
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jogo  $jogo
     * @return \Illuminate\Http\Response
     */
    public function show(Jogo $jogo)
    {
        return view('jogos.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jogo  $jogo
     * @return \Illuminate\Http\Response
     */
    public function edit(Jogo $jogo)
    {
        if(Auth::check()){
        $jogo = jogo::get();

        return view('jogo.edit', ['jogo' => $jogo]);
    }}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jogo  $jogo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jogo $jogo)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jogo  $jogo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jogo $jogo)
    {
        
    }
}
