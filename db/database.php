<?php
class Database
{
    public static function StartUp()
    {
        $pdo = new PDO('mysql:host=remotemysql.com;dbname=KC7tralXh6;charset=utf8', 'KC7tralXh6', 'QcvHIFQPRV');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}

class Conectar{
    public static function conexion(){
        $conexion=new mysqli("localhost", "root", "", "preba");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}