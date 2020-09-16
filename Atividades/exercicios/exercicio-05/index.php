<!DOCTYPE html>
<html lang="br" dir="ltr">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Cadastro de Participante</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
</head>

<body>
    <h1>Se inscreva abaixo</h1>

    <form action="/validar.php" method="post">
       <div class="form-group"> 

        <label for="Nome">Nome:</label> 
        <input type="text" name="Nome" id="Nome" placeholder="Insira seu nome" class="form-control">

        </div>

        <div class="form-group">

            <label for="Usuario">Usuario:</label> 
            <input type="text" name="Usuario" id="Usuario" placeholder="Insira sua id" class="form-control">

        </div>

        <div class="form-group">
            <label for="Time">Time:</label> 
            <input type="text" name="Time" id="Time" placeholder="Insira o time escolhido:" class="form-control">

        </div>

        <div class="form-group">
        <label for="E-mail">E-mail:</label> 

            <input type="text" name="E-mail" id="E-mail" placeholder="Insira sei E-mail:" class="form-control">
        </div>
        
        <label>Horario:</label>

        <div class="form-group form-check">
            <input type="radio" name="Horario" id="Manha" value="Manha" class="form-check-input">
            <label for="Manha" class = "form-check-label" >Manha</label>
        </div>

        <div class="form-group form-check">
            <input type="radio" name="Horario" id="Tarde" value="Tarde" class="form-check-input">
            <label for="Tarde" class = "form-check-label">Tarde</label>
        </div>

        <div class="form-group form-check">
            <input type="radio" name="Horario" id="Noite" value="Noite" class="form-check-input">
            <label for="Noite" class = "form-check-label" >Noite</label>
        </div>

        <label>Modo de disputa:</label>

        <div class="form-group form-check">
            <input type="radio" name="Modo" id="Online" class="form-check-input">
            <label for="Online" class="form-check-label" >Online</label>
        </div>

        <div class="form-group form-check">
            <input type="radio" name="Modo" id="Presencial" class="form-check-input">
            <label for="Presencial" class="form-check-label" >Presencial</label>
        </div>

        <div class="form-group form-check">
            <input type="radio" name="Modo" id="Grupos online e finais presenciais" class="form-check-input">
            <label for="Grupos online e finais presenciais" class="form-check-label" >Grupos Online e finais presenciais</label>
        </div>

        <input type="submit" class="btn btn-primary" value="Cadastrar">
    </form>
</body>
</html>