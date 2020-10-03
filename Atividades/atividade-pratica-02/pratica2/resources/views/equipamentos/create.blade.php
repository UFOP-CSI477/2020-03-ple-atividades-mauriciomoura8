@extends('paginainicial')

@section('conteudo')

<label for="" class="d-flex justify-content-center">Cadastro de novo equipamento</label>

<form action="{{route('equipamentos.store')}}" method="post">
    
    @csrf

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" id="name">
    </div>

    <div class="text-right">
        <input type="submit" value="Cadastrar" class="btn btn-primary">
        <input type="reset" value="Limpar" class="btn btn-danger">    
    </div>

</form>

@endsection