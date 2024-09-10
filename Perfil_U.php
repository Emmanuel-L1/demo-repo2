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
  <?php
  session_start();
  ?>
  <div class="container">
    <div class="profile-card">
      <img src="Logo.png" alt="Imagen de perfil">
      <div class="profile-card__avatar"></div>
      <div class="profile-card__info">
        <h1><?php echo "¡Hola  " . $_SESSION['nombre']; ?>👋!</h1>
        <p><strong>Nombre: </strong><?php require('Conexion.php');
                                    $sql = "SELECT nombre FROM usuario where nombre='$_SESSION[nombre]'";
                                    $result = mysqli_query($conectar, $sql);
                                    while ($row = mysqli_fetch_array($result)) {
                                      echo $row['nombre'];
                                    } ?></p>
        <p><strong>Apellido Paterno: </strong><?php require('Conexion.php');
                                              $sql = "SELECT apellido FROM usuario where nombre='$_SESSION[nombre]'";
                                              $result = mysqli_query($conectar, $sql);
                                              while ($row = mysqli_fetch_array($result)) {
                                                echo $row['apellido'];
                                              } ?></p>
        <p><strong>Correo Electrónico: </strong><?php require('Conexion.php');
                                                $sql = "SELECT correo FROM usuario where nombre='$_SESSION[nombre]'";
                                                $result = mysqli_query($conectar, $sql);
                                                while ($row = mysqli_fetch_array($result)) {
                                                  echo $row['correo'];
                                                } ?></p>
        <p><strong>Contraseña: </strong><?php require('Conexion.php');
                                        $sql = "SELECT contraseña FROM usuario where nombre='$_SESSION[nombre]'";
                                        $result = mysqli_query($conectar, $sql);
                                        while ($row = mysqli_fetch_array($result)) {
                                          echo str_repeat('*', strlen($row['contraseña']));
                                        } ?></p>
        <p>Gracias por visitar nuestro sitio TKM :)</p>
      </div>
      <div class="profile-card__actions">
        <a href="Modificar_P.php" class="ml-auto mr-2"><button class="btn btn-success">Editar Perfil</button></a>
        <a href="EliminarP.php" class="ml-auto mr-2"><button class="btn btn-success">Eliminar perfil</button></a>
        <a href="Perfil.php" class="ml-auto mr-2"><button class="btn btn-success">Regresar</button></a>
        <a href="Cerrar_Secion.php" class="ml-auto mr-2"><button class="btn btn-success">Cerrar sesión</button></a>
      </div>
    </div>
  </div>
</body>
<footer>
  <p>Derechos reservados, página con fines académicos &copy; 2024</p>
</footer>

</html>