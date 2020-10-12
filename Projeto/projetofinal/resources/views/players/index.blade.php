@extends ('welcome')

@section('conteudo')



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <title>A tabela está assim, a emoção está rolando!</title>
</head>
<body>

    
    <h2>Players inscritos:</h2>
    <table class= "table table-bordered table-hover table-striped">
    
    <thead  class="thead-dark">
        <tr>

        <th>Nome</th>

        <th>ID Online</th>

        <th>Time Escolhido</th>

        <th>Plataforma</th>

        <th>Ver tudo</th>
        
        </tr>
    </thead>

    <tbody>
        @foreach($players as $p)
        <tr>
            <td>{{$p->nome}}</td>
            <td>{{$p->idOnline}}</td>
            <td>{{$p->timeEscolhido}}</td>
            <td>{{$p->plataforma}}</td>
            <td><a href="{{route('players.show', $p->id)}}">Dados Gerais</a></td>
        </tr>
        @endforeach
    </tbody>

    </table>
    
</body>







@endsection