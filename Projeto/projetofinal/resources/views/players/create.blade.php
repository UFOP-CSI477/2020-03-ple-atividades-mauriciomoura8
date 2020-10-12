@extends('welcome')

@section('conteudo')

<label for="" class="d-flex justify-content-center">Cadastro de novo Player</label>

<form action="{{route('players.store')}}" method="post">
    
    @csrf
<div class="container" style="place-items:center; margin-top:30pt; margin-bottom:30pt">

<div class="row">
<div class="col-md-4">
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" required="required">
    </div>
    </div>

    <div class="col-md-4">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" id="email" required="required">
    </div> 
    
    <div class="col-md-4">
    <label for="idOnline">id Online</label>
        <input type="text" class="form-control" name="idOnline" id="idOnline" required="required">
        
    </div>
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
   

    <div class="col-md-4">
    <div class="form-group">
    <label for="cidade">Cidade</label>
        <input type="text" class="form-control" name="cidade" id="cidade" required="required">  
        
    </div>
    </div>

    <div class="col-md-4">
    <div class="form-group">
    <label for="plataforma">Escolha sua Plataforma</label>
        <select name="plataforma" id="plataforma" class="form-control" required="required">
        <option value="PS4">PS4</option>
        <option value="Xbox One">Xbox One</option>
        <option value="PC">PC</option>
        </select>
        
    </div>
    </div>

    </div>
    


    <div class="text-right">
        <input type="submit" value="Cadastrar" class="btn btn-primary">
        <input type="reset" value="Limpar" class="btn btn-danger">    
    </div>
</div>

</div>

</form>

@endsection