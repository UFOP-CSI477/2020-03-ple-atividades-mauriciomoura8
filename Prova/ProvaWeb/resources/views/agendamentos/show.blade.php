@extends('welcome')


@section('conteudo')

    <h1>Dados do Agendamento</h1>

    <table class= "table table-bordered table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID DO AGENDAMENTO</th>
                <th>PESSOA</th>
                <th>LOCAL DA COLETA</th>
                <th>CIDADE DA COLETA</th>
                <th>DATA</th>
                
            </tr>
        
        </thead>
        <tbody>
        
            
                <tr>
                    <td>{{$agendamento->id}}</td>
                    <td>{{$agendamento->pessoa->nome}}</td>
                    <td>{{$agendamento->coleta->nome}}</td>
                    <td>{{$agendamento->coleta->cidade}}</td>
                    <td>{{$agendamento->data}}</td>
                    
                    
                </tr>
            
        </tbody>
   
   
   
   
   
   </table>


    

    <form name="deletar" action="{{route('agendamentos.destroy', $agendamento->id)}}"method="post" onsubmit="return confirm('confirmar exclusao?');">
    
    @csrf
    @method('DELETE')

    

    <a href="{{route('agendamentos.edit', $agendamento->id)}}" type="button" class="btn btn-dark">Editar</a> 
    <a href="{{route('agendamentos.index')}}" type="button" class="btn btn-dark">Voltar</a> 

    <input type="submit" class="btn btn-dark" value="Excluir">

    </form>
@endsection