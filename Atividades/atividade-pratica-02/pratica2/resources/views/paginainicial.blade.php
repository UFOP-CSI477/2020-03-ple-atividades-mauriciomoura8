<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="http://www.w3.org/2000/svg">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">



    
    <title>Sistema de Vendas</title>
</head>
<body>

        <div class="container-fluid">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            
                <a class="navbar-brand logo" href="{{route('paginainicial')}}">

                    <img src="http://www.w3.org/2000/svg" alt="Logo">
                    SisVen
                </a>

                <ul class="nav">
                    <li class="nav-item"><a class="nav-link" href="{{route('registros.index')}}">Registros</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('users.index')}}">User</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('equipamentos.index')}}">Equipamentos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('paginainicial')}}">Inicio</a></li>
                </ul>
            
            </nav>


        <!--Mensagem-->    
        @if(session('mensagem'))
            <!--Alerta bootstrap-->
            <div class="alert alert-success">
                {{session('mensagem')}}
            </div>
        @endif


        <!--Contéudo da página-->
        @yield('conteudo')
        </div>






</body>
</html>