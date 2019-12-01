
<html>

	<head>
		<title>Login | Sistema de Gestión Tiendapp</title>
		
		<meta name="viewport" content="width=device-width, initial-escale=1.0">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="framework/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="shortcut icon" href="../assets/img/favicon.png" />

   
			
	</head>


	<body>
	
		 <div align="center"class="container">
			
				
				<div class="jumbotron boxlogin">
					<div class="form-group" align="center">
							<h1 >REGISTRO</h1>
					</div>
					
					<form class="form-horizontal" method="POST" name="flogin" id="flogin"  action="../controlador/registro_controlador.php">
					<div align="left">
						<label>Nombre de Usuario:</label>
						</div>
							<div class="form-group input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-user"></span>
								</span>
								<input type="text" name="username"  id="username" class="form-control" placeholder="ingresa usuario" required>
							</div>
							<div align="left">
								<label>Contraseña:</label>
								</div>
							<div  class="form-group input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-lock"></span>
								</span>
								<input type="password" name="password" id="password" class="form-control" placeholder="ingresa contraseña" required>
							</div>
							
							<div class="form-group">
								<input type="submit" class="btn btn-success" value="ingresar" style="width:430px;">
							</div>
							
						<div align="left" class="form-group">
							<a href="vista/registro_vista.php" >REGISTRATE</a>
						</div>
					</form>
				</div>
			
		</div>
	</body>
</html>
