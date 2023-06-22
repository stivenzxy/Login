<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registro</title>
	<link rel="stylesheet" href="../css/stylesNewUser.css">
	<link rel="shortcut icon" href="../resources/register.ico" type="image/x-icon">
</head>

<body>
	<div class="container">
		<div class="title">Crear Cuenta</div>
		<form method="post" id="newUserForm" action="../controllers/createUserFormAccess.php">
			<div class="user-details">
				<div class="input-box">
					<span class="details">Nombre de usuario</span>
					<input type="text" id="user" name="user" placeholder="Ingrese su nombre" required>
				</div>
				<div class="input-box">
					<span class="details">Email</span>
					<input type="text" id="email" name="email" placeholder="Correo electronico" required>
				</div>
				<div class="input-box">
					<span class="details">Telefono</span>
					<input type="text" id="phone" name="phone" placeholder="Numero de telefono" required>
				</div>
				<div class="input-box">
					<span class="details">Contraseña</span>
					<input type="password" id="pass" name="pass" placeholder="Ingrese una contraseña" required>
				</div>
				<div class="input-box">
					<span class="details">Confirme su contraseña</span>
					<input type="password" id="confirm_pass" name="confirm_pass" placeholder="confirmar contraseña" required>
				</div>
					<button type="submit" id="button">Registrar</button>
					<!--<div class="backToLogin">
						<span>¿Ya tienes una cuenta?</span>
						<a href="../views/loginView.php">Iniciar Sesion</a>
					</div>-->
			</div>
			<br><br>
			<div id="alerta"></div>
		</form>
	</div>
	
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
	<script type="module" src="../assets/mainNewUser.js"></script>
</body>

</html>