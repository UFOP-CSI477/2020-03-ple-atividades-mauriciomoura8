<?php

    //echo "POST";
    //var_dump($_POST);

    $user = $_POST['usuario'];
    $password = $_POST['senha'];

    if($user == "admin" && $password == "admin"){

        echo "VOCÊ É PIKA!!!";
    }

    else {
        echo "VOCÊ NÃO É PIKA!!!";
    }

    echo "<a href=\"/login/index.php\">Voltar</a>";