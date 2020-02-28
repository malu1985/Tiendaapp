<?php
class Database
{
    public static function StartUp()
    {
        $pdo = new PDO('mysql:host=remotemysql.com;dbname=b10_25187440_1;charset=utf8', 'b10_25187440_1', 'rCG7KavbHL');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}

class Conectar{
    public static function conexion(){
        $conexion=new mysqli("remotemysql.com", "3s9HFMl2H9", "rCG7KavbHL", "3s9HFMl2H9");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
