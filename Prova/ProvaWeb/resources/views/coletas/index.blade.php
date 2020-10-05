@exteds ('welcome')

@section('conteudo')



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <title>Relatório de coletas</title>
</head>
<body>

    @foreach($container as $chave => $cont)
    <h2>Coletas: {{$chave}}</h2>
    <table class= "table table-bordered table-hover table-striped">
    
    <thead  class="thead-dark">
        <tr>

        <th>CIDADE DA COLETA</th>

        <th>LOCAL DA COLETA</th>
        
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

    @endforeach 
    
</body>







@endsection