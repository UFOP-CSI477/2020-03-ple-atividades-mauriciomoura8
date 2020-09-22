<?php

namespace App\Database;

class AdapterSQLite implements AdapterInterface{

    public function open(){
        



    echo "<br>CU<br>";
    }

    public function close(){
        echo "<br>XOTA<br>";
    }

    public function get(){
        echo "<br>PAU<br>";
    }

}