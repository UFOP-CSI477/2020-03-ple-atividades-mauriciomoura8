<?php

    //echo "POST";
    //var_dump($_POST);

    $Nome = $_POST['Nome'];
    $Usuario = $_POST['Usuario'];
    $email = $_POST['E-mail'];
    $Time = $_POST['Time']; 
    $Horario = $_POST['Horario'];
    $Modo =  $_POST['Mododedisputa'];

    echo "<h1>Olá, $Nome</h1>";
    echo "<p>Usuario: $Usuario</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Time: $Time</p>";
    echo "<p>Horario: $Horario</p>";
    echo "<p>Modo: $Modo</p>";


    echo "<a href=\"/index.php\">Voltar</a>";