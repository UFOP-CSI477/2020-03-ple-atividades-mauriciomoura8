@extends('paginainicial')


@section('conteudo')

    <h1>Dados do Equipamento</h1>

    <table class= "table table-bordered table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>CREATED AT</th>
                <th>EXIBIR</th>
            </tr>
        
        </thead>
        <tbody>
        
            
                <tr>
                    <td>{{$equipamento->id}}</td>
                    <td>{{$equipamento->name}}</td>
                    <td>{{$equipamento->created_at}}</td>
                    <td><a href="{{route('equipamentos.show', $equipamento->id)}}">Ver</a></td>
                </tr>
            
        </tbody>
   
   
   
   
   
   </table>


   

    <form name="deletar" action="{{route('equipamentos.destroy', $equipamento->id)}}"method="post" onsubmit="return confirm('confirmar exclusao?');">
    
    @csrf
    @method('DELETE')

    <a href="{{route('equipamentos.edit', $equipamento->id)}}" type="button" class="btn btn-dark">Editar</a> 
    <a href="{{route('equipamentos.index')}}" type="button" class="btn btn-dark">Voltar</a> 

    <input type="submit" class="btn btn-dark" value="Excluir">

    </form>

@endsection