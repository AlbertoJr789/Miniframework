<?php

namespace App;

use PDO;
use PDOException;

class Connection{

    public static function getDb(){

        try{

            return new PDO(
                "mysql:host=localhost;dbname=miniframework;charset=utf8","root",""
            );

        } catch(PDOException $e){
            echo $e->getMessage();
        }

    }
}