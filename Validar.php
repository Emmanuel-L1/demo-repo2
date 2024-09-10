<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Validar</title>
</head>
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

<body>
  <?php
  session_start();
  require('Conexion.php');

  $existe = mysqli_query($conectar, "SELECT * FROM usuario where correo='$_POST[Email]' and contraseña='$_POST[Password]'");
  if (mysqli_num_rows($existe) > 0) {

    mysqli_query($conectar, "SELECT * FROM usuario where correo='$_POST[Email]' and contraseña='$_POST[Password]'") or die("Problemas en el registro al servidor :(" . mysqli_error());

    while ($row =
      mysqli_fetch_assoc($existe)
    ) {
      $Usuario = $row['nombre'];
      $Id_Usuario = $row['Id_Usuario'];
    }

    mysqli_close($conectar);

    $_SESSION['nombre'] = $Usuario;
    $_SESSION['Id_Usuario'] = $Id_Usuario;

    header("Location:Perfil.php", "Location:Categorias.php" && "Location:Perfil_U.php" && "Location:EliminarP.php" && "Location:Modificar_P.php" && "Location:Inmunologia.php" && "Location:Inmunologia_Avanzada_Curso.php" && "Location:Certificado.php" && "Location:confirmar_compra.php");
  } else {
    header("Location:Inicio.html", "Location:Perfil_U.php");
  }
  ?>
</body>
<footer>
  <p>Derechos reservados, página con fines académicos &copy; 2024</p>
</footer>

</html>