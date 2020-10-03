@extends('paginainicial')

@section('conteudo')


   <table class= "table table-bordered table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>EQUIPAMENTO ID</th>
                <th>USER ID</th>
                <th>DESCRICAO</th>
                <th>TIPO</th>
                <th>DATA LIMITE</th>
                <th>EXIBIR</th>
            </tr>
        
        </thead>
        <tbody>
        
            @foreach($registros as $r)
                <tr>
                    <td>{{$r->id}}</td>
                    <td>{{$r->equipamento_id}}</td>
                    <td>{{$r->user_id}}</td>
                    <td>{{$r->descricao}}</td>
                    <td>{{$r->tipo}}</td>
                    <td>{{$r->datalimite}}</td>
                    <td><a href="{{route('registros.show', $r->id)}}">Ver</a></td>
                </tr>
            @endforeach
        </tbody>
   
   
   
   
   
   </table>

   <a class="d-flex justify-content-center" href="{{route('registros.create')}}">Novo Cadastro</a>

@endsection