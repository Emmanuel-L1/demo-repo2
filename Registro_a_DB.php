<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Proyecto Pagina Web</title>
  <link rel="stylesheet" href="Estilo.css">
</head>

<body>
  <div class="wrapper">
    <div class="container">
      <?php
      require('Conexion.php');


      $existe = mysqli_query($conectar, "SELECT * FROM usuario where correo='$_POST[Email]'");
      if (mysqli_num_rows($existe) > 0) {
        echo "Intenta con otro Email<br>";
      } else {
        mysqli_query(
          $conectar,
          "insert into usuario(nombre, apellido, telefono, correo, contraseña) values 
   ('$_POST[Name]',
    '$_POST[LastName]',
    '$_POST[Phone]',
    '$_POST[Email]',
    '$_POST[Password]')"
        ) or die("Problemas en el registro al servidor :(" . mysqli_error());

        mysqli_close($conectar);
        echo "Bienvenido. Usted a completado con exito el registro<br>";
      }
      ?>
      <p>Espere unos segundos mientras lo redirigimos a la pagina principal</p>
      <meta http-equiv="Refresh" content="5;URL=Index.html">
    </div>
    <ul class="bg-bubbles">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>
</body>

</html>