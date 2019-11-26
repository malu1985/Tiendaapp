<?php
session_start();
error_reporting(0);
$varsession=$_SESSION['username'];
if($varsession==null||$varsession=''){
echo"<script type='text/javascript'>
			alert('Inicia sesion primero.');
		window.location='../index.php';
		</script>";
 

 

	die();
}

session_destroy();
header("Location:../index.php")
?>