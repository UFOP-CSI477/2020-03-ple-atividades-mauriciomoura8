@extends('paginainicial')

@section('conteudo')


   <table class= "table table-bordered table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>EMAIL</th>
                <th>Visualizar</th>
            </tr>
        
        </thead>
        <tbody>
        
            @foreach($users as $u)
                <tr>
                    <td>{{$u->id}}</td>
                    <td>{{$u->name}}</td>
                    <td>{{$u->email}}</td>
                    <td><a href="{{route('users.show', $u->id)}}">Ver</a></td>
                </tr>
            @endforeach
        </tbody>
   
   
   
   
   
   </table>

@endsection