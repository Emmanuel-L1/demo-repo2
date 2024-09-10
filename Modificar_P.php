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

<script>
	function mostrarContrasena() {
		var input = document.getElementById("contrasenaInput");
		if (input.type === "password") {
			input.type = "text";
		} else {
			input.type = "password";
		}
	}
</script>


<body>
	<?php
	session_start();
	$Usuario = $_SESSION['nombre'];
	require('Conexion_Modificar.php');
	$query = "SELECT * FROM usuario WHERE nombre='$Usuario'";
	$resultado = $mysqli->query($query);
	$row = $resultado->fetch_assoc();
	?>

	<div class="container">
		<div class="profile-card">
			<img src="Logo.png" alt="Imagen de perfil">
			<div class="profile-card__avatar"></div>
			<div class="profile-card__info">

				<center>
					<FONT face=Arial size=4 COLOR='black'>
						<h1>Modificar Usuario</h1>
					</FONT>
					<form name="modificar_usuario" method="POST" action="Modificar_Segunda_Conexion.php">
						<table width="70%">
							<tr>
								<td><b>Nombre: </b></td>
								<td><?php echo $row['nombre']; ?></td>
							</tr>

							<tr>
								<td><b>Apellido Paterno: </b></td>
								<td><?php echo $row['apellido']; ?></td>
							</tr>

							<tr>
								<td><b>Numero de Telefono: </b></td>
								<td><input type="text" name="ModificarNumTelefono" size="50" value="<?php echo $row['telefono']; ?>" /></td>
							</tr>

							<tr>
								<td><b>Correo Electronico: </b></td>
								<td><input type="text" name="ModificarCorreoElectronico" size="50" value="<?php echo $row['correo']; ?>" /></td>
							</tr>

							<tr>
								<td><b>Contraseña: </b></td>
								<td>
									<input type="password" name="ModificarContraseña" id="contrasenaInput" size="50" value="<?php echo $row['contraseña']; ?>" />
									<button type="button" onclick="mostrarContrasena()">Mostrar/ocultar</button>
								</td>
							</tr>

							<tr>
								<td colspan="2"><br>
									<center><input type="submit" name="Guardar" value="Guardar" /></center>
								</td>
							</tr>
						</table>
					</form>
				</center>



			</div>
			<div class="profile-card__actions">

				<a href="Perfil_U.php" class="ml-auto mr-2"><button class="btn btn-success">Regresar</button></a>
			</div>
		</div>
	</div>
</body>
<footer>
	<p>Derechos reservados, página con fines académicos &copy; 2024</p>
</footer>

</html>