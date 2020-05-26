<?php
class Database
{
    public static function StartUp()
    {
        $pdo = new PDO('mysql:host=sql10.freemysqlhosting.net;dbname=sql10343323;charset=utf8', 'sql10343323', 'K13WhJgcQ2');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}

class Conectar{
    public static function conexion(){
        $conexion=new mysqli("sql10.freemysqlhosting.net", "sql10343323", "K13WhJgcQ2", "sql10343323");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
