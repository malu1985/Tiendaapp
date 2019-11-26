
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
	
		 <div class="container">
			<div class="col-sm-10" style="width:600px; margin-left: 250px;margin-top: 50px">
				
				<div class="jumbotron boxlogin">
					<div class="form-group" style="margin-top:-30px;">
							<h1 style="margin-left: 90px;">LOGIN TIENDAPP</h1>
					</div>
					<hr>
					</hr>
					<form class="form-horizontal" action= "controlador/login.php "method="POST" name="flogin" id="flogin" style="margin-left: 50px;">
					
						<label>Nombre de Usuario:</label>
							<div class="form-group input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-user"></span>
								</span>
								<input type="text" name="username"  id="username" class="form-control" placeholder="ingresa usuario" required>
							</div>
							
								<label>Contraseña:</label>
							<div class="form-group input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-lock"></span>
								</span>
								<input type="password" name="password" id="password" class="form-control" placeholder="ingresa contraseña" required>
							</div>
							<div class="form-group">
								<label>
									<input type="checkbox">
									recordar usuario
								</label>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-success" value="ingresar" style="width:430px;">
							</div>
							
						<div class="form-group">
							<a href="vista/registro_vista.php" >REGISTRATE</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
