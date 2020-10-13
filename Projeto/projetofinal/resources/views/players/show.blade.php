@extends('welcome')


@section('conteudo')

    <h1>Dados do Player</h1>

    <table class= "table table-bordered table-hover table-striped table-dark">
        <thead class="thead-dark">
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>ID Online</th>
                <th>Time Escolhido</th>
                <th>Cidade</th>
                <th>Plataforma</th>
                <th>Historico</th>
            </tr>
        
        </thead>
        <tbody>
        
            
                <tr>
                    <td>{{$player->nome}}</td>
                    <td>{{$player->email}}</td>
                    <td>{{$player->idOnline}}</td>
                    <td>{{$player->timeEscolhido}}</td>
                    <td>{{$player->cidade}}</td>
                    <td>{{$player->plataforma}}</td>
                    <td>{{$player->Historico}}</td>
                    
                </tr>
            
        </tbody>
   
   
   
   
   
   </table>



    
    @csrf
    @method('DELETE')

   
    <a href="{{route('players.index')}}" type="button" class="btn btn-dark">Voltar</a> 

    </form>

@endsection