<!DOCTYPE html>
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
?>
<html lang="es">
	<head>
		<title>Productos</title>
        
        <meta charset="utf-8" />
        
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../assets/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" href="../assets/js/jquery-ui/jquery-ui.min.css" />
        <link rel="stylesheet" href="../assets/css/style.css" />
        <link href="../plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        
        <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
         <script src="../plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="../plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
          <style>
   body
   {
    margin:0;
    padding:0;
    background-color:#f1f1f1;
   }
   .box
   {
    width:1270px;
        padding:20px;
    background-color:#fff;
    border:1px solid #ccc;
    border-radius:5px;
    margin-top:25px;
   }
  </style>
	</head>
	 
    <body>
        
  <div class="container box">
  <div align="right">
  <?php echo"Bienvenido a","Tienda APP","  : ",  $_SESSION['username'];?>
  <a href="../modelo/cerrar_sesion.php"><span class="glyphicon glyphicon-log-in"></span> Salir</a>
  
  </div>