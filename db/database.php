<?php
class Database
{
    public static function StartUp()
    {
        $pdo = new PDO('mysql:host=remotemysql.com;dbname=tK42tdZGro;charset=utf8', 'tK42tdZGro', '0bhEbygdy6');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}

class Conectar{
    public static function conexion(){
        $conexion=new mysqli("remotemysql.com", "tK42tdZGro", "0bhEbygdy6", "tK42tdZGro");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
