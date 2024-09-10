<!DOCTYPE html>
<html lang="es">
<style>
	footer {
		background-color: #333;
		color: #fff;
		text-align: center;
		padding: 10px 0;
		position: fixed;
		bottom: 0;
		left: 0;
		width: 100%;
	}
</style>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Perfil de Usuario</title>
	<link rel="stylesheet" href="Estilo_PU.css">
</head>

<body>


	<div class="container">
		<div class="profile-card">
			<img src="Logo.png" alt="Imagen de perfil">
			<div class="profile-card__avatar"></div>
			<div class="profile-card__info">
				<?php
				session_start();
				$Usuario = $_SESSION['nombre'];
				require('Conexion_Modificar.php');
				$ModificarNumTelefono = $_POST['ModificarNumTelefono'];
				$ModificarCorreoElectronico = $_POST['ModificarCorreoElectronico'];
				$ModificarContraseña = $_POST['ModificarContraseña'];


				"SELECT telefono ,correo, contraseña FROM usuario";

				$query = "UPDATE usuario SET telefono='$ModificarNumTelefono', correo='$ModificarCorreoElectronico', contraseña='$ModificarContraseña' WHERE nombre='$Usuario'";

				$resultado = $mysqli->query($query);
				?>


				<center>
					<?php
					if ($resultado > 0) {
					?>
						<FONT face=Arial size=4 COLOR='red'>
							<h1>Sus datos han sido modificados con exito</h1>
						</FONT>
					<?php 	} else { ?>
						<h1>Error al modificar sus datos :(</h1>
					<?php	} ?>
					<table width='512' border='0' class='borde' bgcolor='#D8D8D8'>
					</table>
				</center>
			</div>
			<div class="profile-card__actions">
				<a href="Modificar_P.php" class="ml-auto mr-2"><button class="btn btn-success">Regresar</button></a>
			</div>
		</div>
	</div>
</body>
<footer>
	<p>Derechos reservados, página con fines académicos &copy; 2024</p>
</footer>

</html>