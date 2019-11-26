<?php
//Llamada al archivo de conexión a la base de datos
include '../db/database.php';


class login{
    //Declaración de variables
     private $db;
     private $lista;
	
    
    public function __construct(){
        $this->db=Conectar::conexion();
        $this->lista=array();
		
    }
    //Declaración de una funcion  que permita la validacion del campo nombre de usuario y contraseña
	public function logueo($username,$pass){
       $sql=$this->db->query("SELECT id_usuario,id_rol from usuarios where nombre_usuario='$username' and contrasena='$pass';");
       while($filas=$sql->fetch_assoc()){
            $this->lista[]=$filas;
        }
		
        return $this->lista;
        
	
        }
		//Declaración de una funcion  que permita la validacion del campo ROL
		public function logueo_rol($username,$pass){
       $sql=$this->db->query("SELECT id_rol from usuarios where nombre_usuario='$username' and contrasena='$pass';");
       while($filas=$sql->fetch_assoc()){

            $this->resu=$filas['id_rol'];
			
	   }
	   
	   
        return $this->resu;
		
    }

}

?>