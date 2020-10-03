@extends('paginainicial')


@section('conteudo')

    <h1>Dados do usuario</h1>

    <table class= "table table-bordered table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>EMAIL</th>
                
            </tr>
        
        </thead>
        <tbody>
        
            
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    
                </tr>
            
        </tbody>
   
   
   
   
   
   </table>
    <a href="{{route('users.index')}}">Voltar</a>

    @csrf


@endsection