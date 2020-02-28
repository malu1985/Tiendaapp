<?php
class Database
{
    public static function StartUp()
    {
        $pdo = new PDO('mysql:host=remotemysql.com;dbname=3s9HFMl2H9;charset=utf8', 'b10_25187440_1', '3s9HFMl2H9');
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
