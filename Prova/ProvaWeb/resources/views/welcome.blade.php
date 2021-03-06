<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Pagina Inicial</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/cover/">

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="{{asset('layout.css')}}" rel="stylesheet">

    
    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
    
      <h3 class="masthead-brand">PAGINA INICIAL</h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link active" href="{{route('welcome')}}">Inicio</a>
        @guest
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('login') }}">{{ __('--Entrar') }}</a>
                            </li>
                           
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
      </nav>
      
    </div>
  </header>
      
  <main role="main" class="inner cover">
  <h2 style="margin-top:10pt;"></h2>
    <h1 class="cover-heading">Sistema de doação de sangue</h1>
    <p class="lead">Trabalho desenvolvido para a disciplina de Sistemas Web - ICEA/UFOP</p>
    <p class="lead">
      <a href="{{route('geral.index')}}" class="btn btn-lg btn-secondary">Área Geral</a>
      <a href="{{route('administrativo.index')}}" class="btn btn-lg btn-secondary">Área Administrativa</a>
    </p>
    @if(session('mensagem'))
            <!--Alerta bootstrap-->
            <div class="alert alert-success">
                {{session('mensagem')}}
            </div>
        @endif


        <!--Contéudo da página-->
        @yield('conteudo')
  </main>

  <footer class="mastfoot mt-auto">
    <div class="inner">
      <p>MAURICIO MOURA</p>
    </div>
  </footer>
  
</div>
</body>
</html>
