
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/EstiloLogin.css">
	<meta name="google-signin-client_id" 
	content="363480282160-60k7tnl57l0ivpu603rqbuv1i8tjrg6c.apps.googleusercontent.com">
</head>

<body class="text-center">
<div class="container">
        <div class="card card-container">

          
            <p id="profile-name" class="profile-name-card">Login</p>
            <form class="form-signin" method="post" action="../controlador/accion/act_login.php">
                <span id="reauth-email" class="reauth-email"></span>
                <input name="correo" type="text" id="user" class="form-control" placeholder="Correo" autofocus required>
                <input  name="password" type="password" id="password" class="form-control" placeholder="Contraseña"  required>
            
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
				<button class="btn btn-lg btn-primary btn-block btn-signin" onclick="location.href = 'registrar.php'">Sign up</button>
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->
 
  <!-- Este es el formulario que enviará el correo y password a
  la accion act_login.php del controlador cuando se oprima el boton Iniciar Sesión -->
<!-- <form class="form-signin" method="post" action="../controlador/accion/act_login.php">
  
	<h1 class="h3 mb-3 font-weight-normal">Login</h1>
	<label for="user" class="sr-only">Usuario</label>
	<!-- El atributo name es muy importante debido a que en la accion del
	  controlador que lo recibe va a tener el mismo nombre para poder identificarlo
	Por ejemplo este input tiene el name='correo' y en el controlador se va a 
	obtener este valor así $correo = $_POST['correo'], en el caso que se este 
	enviando el formulario por el metodo POST, si fuera por el metodo GET, 
	sería así $correo = $_GET['correo']-->
	<!--<input name="correo" type="text" id="user" class="form-control" placeholder="Correo" autofocus>
	<label for="password" class="sr-only">Contraseña</label>
	<input name="password" type="password" id="password" class="form-control" placeholder="Contraseña" >
	<div class="checkbox mb-3">
	</div>
	<button class="btn btn-lg btn-primary btn-block" type="submit">
		<h8>Iniciar Sesión</h8>
	</button>
	 <div style="width:300px; height:48px; margin: 10px 0;" class="g-signin2" data-onsuccess="onSignIn">r</div> 
	<input type="button" class="btn btn-lg btn-secondary btn-block" onclick="location.href = 'registrar.php'" value="Registrar">	

</form> -->
	<script src="js/librerias/jquery-3.3.1.min.js"></script>
	<script src="js/librerias/bootstrap.min.js" ></script>
	<script src="js/librerias/bootstrap.bundle.min.js"></script>
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<script src="js/librerias/sweetalert.min.js"></script>
	<script src="js/logica/login.js"></script>
</body>
</html>

<style>

	/*
 * Specific styles of signin component
 */
/*
 * General styles
 */
body, html {
    height: 100%;
    background-repeat: no-repeat;
    background-image: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));
}

.card-container.card {
    max-width: 350px;
    padding: 40px 40px;
}

.btn {
    font-weight: 700;
    height: 36px;
    -moz-user-select: none;
    -webkit-user-select: none;
    user-select: none;
    cursor: default;
}

/*
 * Card component
 */
.card {
    background-color: #F7F7F7;
    /* just in case there no content*/
    padding: 20px 25px 30px;
    margin: 0 auto 25px;
    margin-top: 50px;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}

.profile-img-card {
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}

/*
 * Form styles
 */
.profile-name-card {
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    margin: 10px 0 0;
    min-height: 1em;
}

.reauth-email {
    display: block;
    color: #404040;
    line-height: 2;
    margin-bottom: 10px;
    font-size: 14px;
    text-align: center;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.form-signin #inputEmail,
.form-signin #inputPassword {
    direction: ltr;
    height: 44px;
    font-size: 16px;
}

.form-signin input[type=email],
.form-signin input[type=password],
.form-signin input[type=text],
.form-signin button {
    width: 100%;
    display: block;
    margin-bottom: 10px;
    z-index: 1;
    position: relative;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.form-signin .form-control:focus {
    border-color: rgb(104, 145, 162);
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
}

.btn.btn-signin {
    /*background-color: #4d90fe; */
    background-color: rgb(104, 145, 162);
    /* background-color: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));*/
    padding: 0px;
    font-weight: 700;
    font-size: 14px;
    height: 36px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    border: none;
    -o-transition: all 0.218s;
    -moz-transition: all 0.218s;
    -webkit-transition: all 0.218s;
    transition: all 0.218s;
}

.btn.btn-signin:hover,
.btn.btn-signin:active,
.btn.btn-signin:focus {
    background-color: rgb(12, 97, 33);
}


.forgot-password {
    color: rgb(104, 145, 162);
}

.forgot-password:hover,
.forgot-password:active,
.forgot-password:focus{
    color: rgb(12, 97, 33);
}
</style>