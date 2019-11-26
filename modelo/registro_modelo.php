<?php
//Llamada al archivo de conexión a la base de datos
include '../db/database.php';


class registro{
    //Declaración de variables
     private $db;
     private $lista;
	
    
    public function __construct(){
        $this->db=Conectar::conexion();
        $this->lista=array();
		
    }
    //Declaración de una funcion  que permita la validacion del campo nombre de usuario y contraseña
	public function registro_usuario($id_usuario,$username,$subname,$correo,$password){
       $sql=$this->db->query("INSERT INTO usuarios (id_usuario,nombre_usuario,apellido_usuario,correo,id_rol,contrasena) VALUES ('$id_usuario','$username','$subname','$correo',2,'$password')");
	   
      
		
        return $sql;
        
	
        }
		//Declaración de una funcion  que permita la validacion del campo ROL
		public function logueo_rol($username,$pass){
       $sql=$this->db->query("SELECT id_rol from usuarios where nombre_usuario='$username' and contrasena='$pass';");
       while($filas=$sql->fetch()){

            $this->resu=$filas['id_rol'];
			
	   }
	   
	   
        return $this->resu;
		
    }

}

?>