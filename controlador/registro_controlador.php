<?php

require_once("../modelo/registro_modelo.php");
//	LLamar las variables atraves de la vista atraves del metodo POST
$id_usuario=$_POST['cedula'];
	$username=$_POST['username'];
	$subname=$_POST['subname'];
	$correo=$_POST['correo']; 
	$password=$_POST['password'];
// Realizar la conexion con la clase del modelo
$per=new registro();
$datos=$per->registro_usuario($id_usuario,$username,$subname,$correo,$password);


//Validación de los campos usuario y contraseña
if($datos==true)
	
	{ echo"<script type='text/javascript'>
			alert('Exito al guardar el nuevo usuario ');
			window.location='../index.php';
			</script>";}
			
	else{  echo"<script type='text/javascript'>
			alert('Error al guardar el usuario verifica los campos ');
			window.location='../vista/registro_vista.php';
			</script>";}

?>

