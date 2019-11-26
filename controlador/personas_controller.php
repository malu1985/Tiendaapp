<?php
//Llamada al modelo
require_once("modelo/personas_model.php");
$per=new login();
$datos=$per->logueo($username,$password);
$username=$_POST['username'];
$pass=$_POST['password'];
if($datos>0){



//session_start();


header("Location:../V/tiendaapp.php");
	echo"hola ";
$_SESSION["autentificado"]=true;
$_SESSION['username']=$username;
$_SESSION['password']=$pass;
$_SESSION['id_rol']=$row;	
	$_SESSION["id_rol"]=$filas[1];



	
	header("Location:../V/tiend_app.php");
//	session_start();
$_SESSION["autentificado"]=true;
$_SESSION['username']=$username;
$_SESSION['password']=$pass;
$_SESSION['id_rol']=$row;	
	


}

else{
	
	echo"<script type='text/javascript'>
		alert('datos Incorrectos ');
		window.location='../index.php';
		</script>";
	
}


//Llamada a la vista
require_once("vista/personas_view.phtml");
?>
