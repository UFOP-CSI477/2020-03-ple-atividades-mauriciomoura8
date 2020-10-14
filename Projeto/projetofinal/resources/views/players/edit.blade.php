@extends('welcome')

@section('conteudo')

<label for="" class="d-flex justify-content-center">Atualização de player cadastrado</label>

<form action="{{route('players.update', $player->id)}}" method="post">
    
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="nome">Nome</label>
       <input value="{{$player->nome}}" type="text" class="form-control" name="nome" id="nome">
           
    </div>

    <div class="form-group">
        <label for="email">email</label>
       <input value="{{$player->email}}" type="text" class="form-control" name="email" id="email">
    </div>

    <div class="form-group">
        <label for="idOnline">idOnline</label>
        <input value="{{$player->idOnline}}" type="text" class="form-control" name="idOnline" id="Online">
    </div>

    <div class="row">
    <div class="col-md-4">
    <div class="form-group">
    <label for="timeEscolhido">Escolha seu time</label>
        <select name="timeEscolhido" id="timeEscolhido" class="form-control" required="required">
        <option value="Barcelona">Barcelona</option>
        <option value="Real Madrid">Real Madrid</option>
        <option value="Atletico de Madrid">Atletico de Madrid</option>
        <option value="Liverpool">Liverpool</option>
        <option value="Chelsea">Chelsea</option>
        <option value="Arsenal">Arsenal</option>
        <option value="Manchester United">Manchester United</option>
        <option value="Manchester City">Manchester City</option>
        <option value="Tottenham">Tottenham</option>
        <option value="Paris Saint Germain">Paris Saint Germain</option>
        <option value="Lyon">Lyon</option>
        <option value="Borussia Dortmund">Borussia Dortmund</option>
        <option value="Bayern Munich">Bayern Munich</option>
        <option value="RB Leipzig">RB Leipzig</option>
        <option value="Atalanta">Atalanta</option>
        <option value="Juventus">Juventus</option>
        </select>
   
        
    </div>
    </div>

    <div class="form-group">
        <label for="cidade">Cidade</label>
        <input value="{{$player->cidade}}" type="integer" class="form-control" name="cidade" id="cidade">
    </div>

    <div class="form-group">
        <label for="plataforma">Plataforma</label>
        <input value="{{$player->plataforma}}" type="text" class="form-control" name="plataforma" id="plataforma">
    </div>

    


    <div class="text-right">
        <input type="submit" value="Atualizar" class="btn btn-primary">
        <input type="reset" value="Limpar" class="btn btn-danger">    
    </div>

</form>

@endsection