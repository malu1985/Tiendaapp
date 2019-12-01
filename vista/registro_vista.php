<!DOCTYPE html>
<html>
	<head>
		<title>REGISTRO</title>
		<meta name="viewport" content="width=device-width, initial-escale=1.0">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
		<link rel="shortcut icon" href="../assets/favicon.png" />		
		    		
	</head>

	<body>
		 <div align="center"class="container">
				<div class="jumbotron boxlogin">
					<div class="form-group" align="center">
							<h1 >REGISTRO</h1>
					</div>
					<hr>
					</hr>
					<form class="form-horizontal" method="POST" name="flogin" id="flogin"  action="../controlador/registro_controlador.php" >
					<div align="left">
						<label>Ingrese Cedula:</label>
							<div class="form-group input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-user"></span>
								</span>
								<input type="text" name="cedula" id="cedula" class="form-control" placeholder="ingresa cedula" required pattern="[0-9]{1,40}" title="Solo se aceptan numeros">
							</div>
							</div>
							<div align="left">
						<label>Nombre de Usuario:</label>
							<div class="form-group input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-user"></span>
								</span>
								<input type="text" name="username" id="username" class="form-control" placeholder="ingresa usuario" required>
							</div>
							</div>
							<div align="left">
								<label>Apellido usuario:</label>
							<div class="form-group input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-user"></span>
								</span>
								<input type="text" name="subname" id="subname" class="form-control" placeholder="ingresa apellido" required pattern="[A-Za-z]{1,20}" title="Solo se aceptan letras">
							</div>	
							</div>
							<div align="left">
								<label>Correo usuario:</label>
							<div class="form-group input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-envelope"></span>
								</span>
								<input type="email" name="correo" id="correo" class="form-control" placeholder="ingresa correo" required>
							</div>
							</div>
							<div align="left">
								<label>Contraseña:</label>
							<div class="form-group input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-lock"></span>
								</span>
								<input type="password" name="password" id="password" class="form-control" placeholder="ingresa contraseña" required>
							</div>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-success" value="Registrar">
							</div>
							
						<div align="left" class="form-group">
							<a href="../index.php" >Iniciar Sesión</a>
						</div>
					</form>
				</div>
			
		</div>
	</body>
</html>
