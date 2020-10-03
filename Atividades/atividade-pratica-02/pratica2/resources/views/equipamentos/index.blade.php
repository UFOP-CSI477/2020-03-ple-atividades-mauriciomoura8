@extends('paginainicial')

@section('conteudo')


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
        
            @foreach($equipamentos as $e)
                <tr>
                    <td>{{$e->id}}</td>
                    <td>{{$e->name}}</td>
                    <td>{{$e->created_at}}</td>
                    <td><a href="{{route('equipamentos.show', $e->id)}}">Ver</a></td>
                </tr>
            @endforeach
        </tbody>
   
   
   
   
   
   </table>

   <a class="d-flex justify-content-center" href="{{route('equipamentos.create')}}">Novo Cadastro</a>

@endsection