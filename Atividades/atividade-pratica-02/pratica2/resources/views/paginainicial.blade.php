<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="http://www.w3.org/2000/svg">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">



    
    <title>Controle de Manutenções</title>
</head>
<body>

        <div class="container-fluid">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            
                <a class="navbar-brand logo" href="{{route('paginainicial')}}">

                    
                    HOME MANUTENÇÃO
                </a>

                <ul class="nav">
                    <li class="nav-item"><a class="nav-link" href="{{route('registros.index')}}">Registros</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('users.index')}}">User</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('equipamentos.index')}}">Equipamentos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('paginainicial')}}">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('areageralsuporte')}}">Area Geral-Suporte</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('areageraladm')}}">Area geral-Administração</a></li>

                    @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

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