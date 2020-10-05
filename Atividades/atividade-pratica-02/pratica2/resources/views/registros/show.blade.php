@extends('paginainicial')


@section('conteudo')

    <h1>Dados do registro</h1>

    <table class= "table table-bordered table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>EQUIPAMENTO ID</th>
                <th>USER ID</th>
                <th>DESCRICAO</th>
                <th>TIPO</th>
                <th>DATA LIMITE</th>
                
            </tr>
        
        </thead>
        <tbody>
        
            
                <tr>
                    <td>{{$registro->id}}</td>
                    <td>{{$registro->equipamento_id}}</td>
                    <td>{{$registro->user_id}}</td>
                    <td>{{$registro->descricao}}</td>
                    <td>{{$registro->tipo}}</td>
                    <td>{{$registro->datalimite}}</td>
                    
                </tr>
            
        </tbody>
   
   
   
   
   
   </table>


    

    <form name="deletar" action="{{route('registros.destroy', $registro->id)}}"method="post" onsubmit="return confirm('confirmar exclusao?');">
    
    @csrf
    @method('DELETE')

    

    <a href="{{route('registros.edit', $registro->id)}}" type="button" class="btn btn-dark">Editar</a> 
    <a href="{{route('registros.index')}}" type="button" class="btn btn-dark">Voltar</a> 

    <input type="submit" class="btn btn-dark" value="Excluir">

    </form>
@endsection