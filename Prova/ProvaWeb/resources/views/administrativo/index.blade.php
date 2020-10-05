@extends ('welcome')


@section ('conteudo')


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
                                
    <a href="{{ route('register') }}" class="btn btn-lg btn-secondary">Registrar novo Usuário</a>
    <h2 style="margin-top:30pt;">Outras Áreas</h2>
      <a href="{{route('pessoas.create')}}" class="btn btn-lg btn-secondary">Cadastro de Pessoas</a>
      <a href="{{route('coletas.create')}}" class="btn btn-lg btn-secondary">Cadastro de Locais</a>
    
      <a style="margin-top:10pt" href="{{route('agendamentos.index')}}" class="btn btn-lg btn-secondary">Gerenciamento de Agendamentos</a>



</head>
<body>

    <h2 style="margin-top:20pt;">Pessoas Cadastradas:</h2>
    <table class= "table table-bordered table-hover table-striped">
    
    <thead  class="thead-dark">
        <tr>

        <th>ID</th>

        <th>NOME</th>

        <th>TIPO SANGUINEO</th>
        
        </tr>
    </thead>

    <tbody>
        @foreach($pessoas as $p)
        <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->nome}}</td>
            <td>{{$p->tipo}}</td>
        </tr>
        @endforeach
    </tbody>

    </table>


    <h2>Locais de Coleta Cadastrados:</h2>
    <table class= "table table-bordered table-hover table-striped">
    
    <thead  class="thead-dark">
        <tr>

        <th>LOCAL</th>

        <th>CIDADE</th>
        
        </tr>
    </thead>

    <tbody>
        @foreach($coletas as $c)
        <tr>
            <td>{{$c->nome}}</td>
            <td>{{$c->cidade}}</td>
        </tr>
        @endforeach
    </tbody>

    </table>
    
</body>






@endsection