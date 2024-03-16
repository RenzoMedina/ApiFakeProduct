<?php

namespace database;

use PDO;
use PDOException;

abstract class Database{

    public static function start(){
        $dns = "mysql:host=".$_ENV['DB_HOST'].";dbname=".$_ENV['DB_NAME'];
        try{
            $pdo = new PDO($dns, $_ENV['DB_USER'], $_ENV['DB_PASS']);
            return $pdo;
        }catch(PDOException $e){
            echo "Error en la conexion ".$e->getMessage() ;
        }
    }
}
