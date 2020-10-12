@extends ('welcome')

@section('conteudo')



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <title>A tabela está assim, a emoção está rolando!</title>
</head>
<body>

    
    <h2>Jogos e resultados:</h2>

  




    <table class= "table table-bordered table-hover table-striped">
    
    <thead  class="thead-dark">
        <tr>

        <th>Player 1</th>

        <th>Player 2</th>

        <th>Resultado</th>

        <th>Fase</th>
        
        </tr>
    </thead>

    <tbody>
        @foreach($jogos as $j)
        <tr>
            <td>{{$j->player}}</td>
            <td>{{$j->player}}</td>
            <td>{{$j->p1gols}}x{{$j->p2gols}}</td>
            <td>{{$j->fase}}</td>
        </tr>
        @endforeach
    </tbody>

    </table>
    
</body>







@endsection