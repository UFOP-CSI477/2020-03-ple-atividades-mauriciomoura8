@extends('welcome')

@section('conteudo')

<label for="" class="d-flex justify-content-center">Cadastro de nova coleta</label>

<form action="{{route('coletas.store')}}" method="post">
    
    @csrf

    <div class="form-group">
        <label for="nome">LOCAL DA COLETA</label>
        <input type="text" class="form-control" name="nome" id="nome" required="required">
    </div>

    <div class="form-group">
        <label for="cidade">CIDADE DA COLETA</label>
        <input type="text" class="form-control" name="cidade" id="cidade" required="required">
        
    </div>

    <div class="text-right">
        <input type="submit" value="Cadastrar" class="btn btn-primary">
        <input type="reset" value="Limpar" class="btn btn-danger">    
    </div>

</form>

@endsection