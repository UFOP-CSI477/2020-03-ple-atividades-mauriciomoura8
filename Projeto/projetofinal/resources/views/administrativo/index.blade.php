@extends ('welcome')


@section ('conteudo')


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="{{asset('layout.css')}}" rel="stylesheet">
                                
    
    <a href="{{route('jogos.create')}}" class="btn btn-lg btn-secondary">Cadastro de Jogos</a>
    <a href="{{route('players.index')}}" class= "btn btn-lg btn-secondary">Edicão de Players</a>
  
</head>
<body>

</body>







@endsection