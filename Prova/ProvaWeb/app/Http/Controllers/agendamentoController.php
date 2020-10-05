<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use Illuminate\Http\Request;
use App\Models\Coleta;
use App\Models\Pessoa;
use Illuminate\Support\Facades\Auth;

class agendamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cont = Agendamento::join('pessoas', 'agendamentos.pessoa_id', '=', 'pessoas.id')

        ->orderBy('data', 'desc')
        ->orderBy('pessoas.nome', 'asc')
        ->get('agendamentos.*');
        
        return view('agendamentos.index', ['cont'=>$cont]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::check()){
        $coletas = Coleta::orderBy('nome')->get();
        $pessoas = Pessoa::orderBy('nome')->get();
        return view('agendamentos.create', ['coletas'=>$coletas, 'pessoas'=>$pessoas]);
    }
        else{
            session()->flash('mensagem', 'Ação não permitida!');
            return redirect()->route('login');
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
        if (Auth::check()){
        Agendamento::create($request->all());
        session()->flash('mensagem', 'Agendamento cadastrado!');
        return redirect()->route('agendamento.index');
    }
    else{
        session()->flash('mensagem', 'Ação não permitida!');
        return redirect()->route('login');
    }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agendamento  $agendamento
     * @return \Illuminate\Http\Response
     */
    public function show(Agendamento $agendamento)
    {   
        return view('agendamentos.show', ['agendamento' => $agendamento]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agendamento  $agendamento
     * @return \Illuminate\Http\Response
     */
    public function edit(Agendamento $agendamento)
    {
        if (Auth::check()){
            $coletas = Coleta::orderBy('id')->get();
            $pessoas = Pessoa::orderBy('nome')->get();
        
            return view('agendamentos.edit', ['coletas'=>$coletas, 'pessoas'=>$pessoas, 'agendamento'=>$agendamento]);
        }

        else{
            session()->flash('mensagem', 'Ação não permitida!');
            return redirect()->route('login');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agendamento  $agendamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agendamento $agendamento)
    {
        if (Auth::check()){

            $agendamento->fill($request->all());
            $agendamento->save();

            session()->flash('mensagem', 'Agendamento alterado!');
            return redirect()->route('agendamentos.index');

        }

        else{
            session()->flash('mensagem', 'Ação não permitida!');
            return redirect()->route('login');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agendamento  $agendamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agendamento $agendamento)
    {
        $agendamento->delete();
        session()->flash('mensagem', 'Registro excluido!');
        return redirect()->route('agendamentos.index');
    }
}
