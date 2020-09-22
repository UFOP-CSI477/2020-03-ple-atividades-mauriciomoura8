<?php

require '../vendor/autoload.php';

use App\Models\Estado;
use App\Database\Connection;
use App\Database\AdapterSQLite;


//Configuração: 
$dbfile = "../App/Database/database.sqlite";
$dbuser = "";
$dbpassword = "";
$dbhost = "";

//string de conexão - '.' concatenar
$strConnection = "sqlite:" . $dbfile;

$con = new PDO($strConnection, $dbuser, $dbpassword);
echo'conectado';

$estado = new Estado(1, "Minas Gerais", "MG");

var_dump($estado);

$connection = new Connection(new AdapterSQLite());
var_dump($connection);



$connection->getAdapter()->open();
$connection->getAdapter()->close();
$connection->getAdapter()->get();
