@extends('paginainicial')

@section('conteudo')

<label for="" class="d-flex justify-content-center">Atualização de registro</label>

<form action="{{route('registros.update', $registro->id)}}" method="post">
    
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="equipamento_id">Equipamento</label>
        <select name="equipamento_id" id="equipamento_id" class="form-control" required="required">
        <option value={{$registro->equipamento->id}}>{{$registro->equipamento->name}}</option>
        @foreach($equipamentos as $equipamento)
        <option value={{$equipamento->id}}>{{$equipamento->name}}</option>
        @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="user_id">Usuario</label>
        <select name="user_id" id="user_id" class="form-control" required="required">
        <option value={{$registro->user->id}}>{{$registro->user->name}}</option>
        @foreach($users as $user)
        <option value={{$user->id}}>{{$user->name}}</option>
        @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="descricao">Descricao</label>
        <input value="{{$registro->descricao}}" type="text" class="form-control" name="descricao" id="descricao">
    </div>

    <div class="form-group">
        <label for="datalimite">Data limite</label>
        <input value="{{$registro->datalimite}}" type="date" class="form-control" name="datalimite" id="datalimite">
    </div>

    <div class="form-group">
        <label for="tipo">Tipo</label>
        <input value="{{$registro->tipo}}" type="integer" class="form-control" name="tipo" id="tipo">
    </div>


    <div class="text-right">
        <input type="submit" value="Cadastrar" class="btn btn-primary">
        <input type="reset" value="Limpar" class="btn btn-danger">    
    </div>

</form>

@endsection