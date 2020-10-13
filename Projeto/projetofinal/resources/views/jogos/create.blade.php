@extends('welcome')

@section('conteudo')

<label for="" class="d-flex justify-content-center">Cadastro de Jogos</label>

<form action="{{route('jogos.store')}}" method="post">
    
    @csrf
    <div class="container" style="place-items:center; margin-top:30pt; margin-bottom:30pt">

    <div class="row">

    <div class="col-md-6">
    <div class="form-group">
        <label for="player1">Nome do Jogador 1</label>
        <select name="player1" id="player1" class="form-control" required="required">
        @foreach($players as $player)
        <option value="{{$player->idOnline}}">{{$player->nome}} - {{$player->idOnline}}</option>
        @endforeach
        </select>
    </div>
    </div>
    

    <div class="col-md-4">
    <div class="form-group">
        <label for="p1gols">Gols marcados pelo primeiro jogador</label>
        <input type="text" class="form-control" name="p1gols" id="p1gols">
    </div>
    </div>

    </div>

    <div class="row">

    <div class="col-md-6">
    <div class="form-group">
        <label for="player2">Nome do Jogador 2</label>
        <select name="player2" id="player2" class="form-control" required="required">
        @foreach($players as $player)
        <option value="{{$player->idOnline}}">{{$player->nome}} - {{$player->idOnline}}</option>
        @endforeach
        </select>
    </div>
    </div>
    
    <div class="col-md-4">
    <div class="form-group">
        <label for="p2gols">Gols marcados pelo segundo jogador</label>
        <input type="text" class="form-control" name="p2gols" id="p2gols">
    </div>
    </div>

    </div>

    <div class="col-md-10">
    <div class="form-group">
    <label for="fase">Escolha a fase jogada</label>
        <select name="fase" id="fase" class="form-control" required="required">
        <option value="8">8ª de final</option>
        <option value="4">4ª de final</option>
        <option value="2">Semi finais</option>
        <option value="1">Final</option>
        </select>
        
    </div>
    </div>
    

    <div class="text-right">
        <input type="submit" value="Cadastrar" class="btn btn-primary">
        <input type="reset" value="Limpar" class="btn btn-danger">    
    </div>

    </div>

</form>

@endsection