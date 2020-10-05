@extends ('welcome')

@section('conteudo')



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <title>Relatório de Agendamentos</title>
</head>
<body>

    <h2>Agendamentos:</h2>
    <table class= "table table-bordered table-hover table-striped">
    
    <thead  class="thead-dark">
        <tr>

        <th>DATA</th>

        <th>PESSOA ID</th>

        <th>NOME</th>

        <th>TIPO SANGUINEO</th>

        <th>CIDADE DA COLETA</th>

        <th>NOME DO LOCAL</th>
        
        </tr>
    </thead>

    <tbody>
        @foreach($cont as $c)
        <tr>
            <td>{{$c->data}}</td>
            <td>{{$c->pessoa->id}}</td>
            <td>{{$c->pessoa->nome}}</td>
            <td>{{$c->pessoa->tipo}}</td>
            <td>{{$c->coleta->cidade}}</td>
            <td>{{$c->coleta->nome}}</td>
        </tr>
        @endforeach
    </tbody>

    </table>
    
</body>







@endsection