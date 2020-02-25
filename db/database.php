<?php
class Database
{
    public static function StartUp()
    {
        $pdo = new PDO('mysql:host=sql104.byethost.com;dbname=b10_25187440;charset=utf8', 'b10_25187440_1', 'barcelona22');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}

class Conectar{
    public static function conexion(){
        $conexion=new mysqli("sql104.byethost.com", "b10_25187440", "barcelona22", "b10_25187440_1");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
