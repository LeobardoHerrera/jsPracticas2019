<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="../plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../plugins/fontawesome-free-5.8.1-web/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
</head>
<body class="login">
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-md-auto login-box borde sombra">
				<h3 class="text-center titulo">Iniciar Sesión</h3>
				<hr>
				<form action="">
					<div class="form-row">
						<div class="col-md-12">
							<label for="" class="colorLetra">Nombre de usuario:</label>
					          <div class="form-group has-feedback salto">
					            <input type="text" name="username" placeholder="Usuario" class="form-control " autofocus>
					            <span class="glyphicon glyphicon-user form-control-feedback"></span>
					          </div>
						</div>
						<div class="col-md-12">
							<label for="" class="colorLetra">Contraseña:</label>
					          <div class="form-group has-feedback salto">
					            <input type="text" name="username" placeholder="Usuario" class="form-control " autofocus>
					            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
					          </div>
						</div>
					</div>
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
		              			<button type="submit" class="btn btn-login  btn-flat  pull-left" id="btnIngresar" >
			              			<i class="fas fa-key"></i>
			              			Cambiar Contraseña
		              			</button>
		              			<button type="submit" class="btn btn-login  btn-flat  pull-right" id="btnIngresar">
			              			<i class="fas fa-lock-open"></i>
			              			Ingresar
		              			</button>
	              			</div>
	            		</div><!-- /.col -->
					</div>
				</form>
			</div>			
		</div>
	</div>

	<script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
	<script src="../plugins/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>