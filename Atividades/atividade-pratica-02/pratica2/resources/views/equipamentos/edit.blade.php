@extends('paginainicial')

@section('conteudo')

<label for="" class="d-flex justify-content-center">Cadastro de novo equipamento</label>

<form action="{{route('equipamentos.update', $equipamento->id)}}" method="post">
    
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" id="name" value="{{$equipamento->name}}">
    </div>

    <div class="text-right">
        <input type="submit" value="Atualizar" class="btn btn-primary">
        <input type="reset" value="Limpar" class="btn btn-danger">    
    </div>

</form>

@endsection