@extends('welcome')

@section('conteudo')

<label for="" class="d-flex justify-content-center">Cadastro de novo usuario</label>

<form action="{{route('pessoas.store')}}" method="post">
    
    @csrf

    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" required="required">
    </div>

    <div class="form-group">
        <label for="tipo">Tipo Sanguineo</label>
        <select name="tipo" id="tipo" class="form-control" required="required">
        <option value="A+">A+</option>
        <option value="A+">A-</option>
        <option value="A+">B+</option>
        <option value="A+">B-</option>
        <option value="A+">AB+</option>
        <option value="A+">AB-</option>
        <option value="A+">O+</option>
        <option value="A+">O-</option>
        </select>
    </div>

    <div class="text-right">
        <input type="submit" value="Cadastrar" class="btn btn-primary">
        <input type="reset" value="Limpar" class="btn btn-danger">    
    </div>

</form>

@endsection