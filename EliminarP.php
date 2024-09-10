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
        $servername = "localhost";
        $username = "root";
        $password = "SoyYoMismo.78";
        $dbname = "MediAprende";
        $Nombre = $_SESSION['nombre'];
        echo "<h2>Tu usuario $Nombre, se ha eliminado con exito</h2>";
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
          die("Conectien failed: " . $conn->connect_error);
        }

        $sql = "DELETE FROM usuario WHERE nombre='$Nombre'";


        if ($conn->query($sql) === TRUE) {
          echo "<h3>Gracias por utilizar nuestros servicios</h3>";
        } else {
          echo "No se puede borrar su usuario: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
        ?>

      </div>
      <div class="profile-card__actions">
        <a href="Cerrar_Secion.php" class="ml-auto mr-2"><button class="btn btn-success">Regresar</button></a>
      </div>
    </div>
  </div>
</body>
<footer>
  <p>Derechos reservados, página con fines académicos &copy; 2024</p>
</footer>

</html>