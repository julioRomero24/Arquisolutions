<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registro</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/EstiloLogin.css">	
	<link href="css/gijgo.css" rel="stylesheet" type="text/css"/>

</head>

<body class="text-center">
	
<div class="container">
        <div class="card card-container">

			<form class="form-signin" method="post" action="../controlador/accion/act_registrarUsuario.php">
				 
	
				<input name="nombre" type="text" id="nombre" class="form-control" placeholder="Nombre" autofocus require value="Nombre">

				<input name="apellido" type="text" id="apellido" class="form-control" placeholder="Apellido" autofocus require value="Apellido">
				
				<input name="correo" type="email" id="correo" class="form-control" placeholder="Correo" autofocus require value="ca@gm.com">
	
				<input name="password" type="password" id="password" class="form-control" placeholder="Contraseña" require value="123">

				<input name="telefono" type="number" id="telefono" class="form-control" placeholder="Telefono" require value="300145865">

				<input name="rol" type="text" id="rol" class="form-control" placeholder="Rol" value="usuario" readonly require>
	
	
				
				<button class="btn btn-lg btn-primary btn-block" type="submit">
					<h8>Registrar</h8>
				</button>

					
				<input type="button" class="btn btn-lg btn-secondary btn-block" onclick="location.href = 'login.php'" value="Iniciar Sesión">	

				
			</form>

		</div >
	</div>
	<script src="js/librerias/jquery-3.3.1.min.js"></script>
	<script src="js/librerias/bootstrap.min.js" ></script>
	<script src="js/librerias/bootstrap.bundle.min.js"></script>
	<script src="js/librerias/sweetalert.min.js"></script>
	<script src="js/librerias/gijgo.min.js" ></script>
	<script src="js/logica/registrar.js"></script>
	
</body>
</html>