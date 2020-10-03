@extends('paginainicial')

@section('conteudo')


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <title>Area geral de suporte</title>
</head>
<body>

<a href="{{route('equipamentos.index')}}" type="button" class="btn btn-primary btn-lg btn-block">Lista de equipamentos</a>



<a href="{{route('manuequipamentos')}}" type="button" class="btn btn-primary btn-lg btn-block">Manutenções por equipamento</a>
    
</body>
@endsection