<?php 
class Conexion{

    public function conectar(){
        $pdo = new PDO("mysql:host=localhost;dbname=RSNNA-P.P","root","");
        return $pdo;
    }
}




?>