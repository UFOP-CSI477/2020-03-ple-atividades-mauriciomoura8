@extends('paginainicial')

@section('conteudo')

<label for="" class="d-flex justify-content-center">Cadastro de novo registro</label>

<form action="{{route('registros.store')}}" method="post">
    
    @csrf

    <div class="form-group">
        <label for="equipamento_id">Equipamento</label>
        <select name="equipamento_id" id="equipamento_id" class="form-control" required="required">
        @foreach($equipamentos as $equipamento)
        <option value="{{$equipamento->id}}">{{$equipamento->name}}</option>
        @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="user_id">Usuário</label>
        <select name="user_id" id="user_id" class="form-control" required="required">
        @foreach($users as $user)
        <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="descricao">Descricao</label>
        <input type="text" class="form-control" name="descricao" id="descricao">
    </div>

    <div class="form-group">
        <label for="datalimite">Data limite</label>
        <input type="date" class="form-control" name="datalimite" id="datalimite">
    </div>

    <div class="form-group">
        <label for="tipo">Tipo</label>
        <input type="integer" class="form-control" name="tipo" id="tipo">
    </div>


    <div class="text-right">
        <input type="submit" value="Cadastrar" class="btn btn-primary">
        <input type="reset" value="Limpar" class="btn btn-danger">    
    </div>

</form>

@endsection