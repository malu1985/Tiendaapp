<?php

require_once("../modelo/login.php");
//	LLamar las variables atraves de la vista atraves del metodo POST
$username=$_POST['username'];
$pass=$_POST['password'];
// Realizar la conexion con la clase del modelo
$per=new login();
$datos=$per->logueo($username,$pass);
$per2=new login();
$datos2=$per2->logueo_rol($username,$pass);
$dat=$per2->logueo_rol;

//Validación de los campos usuario y contraseña
if($datos==true){

//Validación del Roles
	if($datos2==1){	
session_start();
header("Location:../vista/vista_producto.php");
$_SESSION["autentificado"]=true;
$_SESSION['username']=$username;
$_SESSION['password']=$pass;
$_SESSION['id_rol']=$datos2;	
$_SESSION["id_rol"]=$datos[1];


}

	if($datos2==2){

header("Location:../vista/vista_productouser.php");
session_start();
$_SESSION["autentificado"]=true;
$_SESSION['username']=$username;
$_SESSION['password']=$pass;
$_SESSION['id_rol']=$row;	
	}	


}
//Mensaje de error al acceder 
else{
	
	echo"<script type='text/javascript'>
		alert('Verfica los Datos Ingresados ');
		window.location='../index.php';
		</script>";
	
}


//Llamada a la vista
require_once("../vista/personas_view.phtml");

?>

