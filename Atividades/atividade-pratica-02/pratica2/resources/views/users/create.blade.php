@extends('paginainicial')

@section('conteudo')

<label for="" class="d-flex justify-content-center">Cadastro de novo usuario</label>

<form action="{{route('users.store')}}" method="post">
    
    @csrf

    <div class="form-group">
        <label for="name">name</label>
        <input type="text" class="form-control" name="name" id="name">
    </div>

    <div class="form-group">
        <label for="email">email</label>
        <input type="text" class="form-control" name="email" id="email">
    </div>

    <div class="form-group">
        <label for="password">password</label>
        <input type="text" class="form-control" name="password" id="password">
    </div>


    <div class="text-right">
        <input type="submit" value="Cadastrar" class="btn btn-primary">
        <input type="reset" value="Limpar" class="btn btn-danger">    
    </div>

</form>

@endsection