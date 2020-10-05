@extends ('welcome')

@section('conteudo')



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <title>Relatório de Pessoas</title>
</head>
<body>

    
    <h2>Pessoas:</h2>
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
    
</body>







@endsection