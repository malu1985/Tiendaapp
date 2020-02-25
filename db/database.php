<?php
class Database
{
    public static function StartUp()
    {
        $pdo = new PDO('mysql:host=remotemysql.com;dbname=3s9HFMl2H9;charset=utf8', '3s9HFMl2H9', '7kdWZZsgSf');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}

class Conectar{
    public static function conexion(){
        $conexion=new mysqli("remotemysql.com", "3s9HFMl2H9", "7kdWZZsgSf", "3s9HFMl2H9");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
