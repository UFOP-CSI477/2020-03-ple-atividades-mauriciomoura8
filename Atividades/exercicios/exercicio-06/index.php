<?php

    //configuração
    
    require_once 'connection.php';

    //var_dump($connection);

    //controller
    $estados = $connection->query("SELECT * FROM estados");
    

    //var_dump($estados->fetchAll());

    //view

    require 'estadosView.php';
    