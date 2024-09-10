<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background: url('Fondo.jpg') no-repeat center center fixed;
      background-size: cover;
    }

    .navbar {
      background-color: #0080ff;
      padding: 5px 0;
    }

    .navbar-brand img {
      max-height: 80px;
      margin-left: 10px;
    }

    .navbar-toggler {
      border-color: white;
    }

    .navbar-nav {
      align-items: center;
    }

    .nav-item {
      margin-left: 15px;
    }

    .welcome-text {
      color: white;
      margin-right: 15px;
    }

    .navbar-nav .nav-link {
      color: white;
      font-size: 1.2em;
      margin-right: 15px;
    }

    .navbar-nav .nav-link:hover {
      color: #ffc107;
    }

    .main-content {
      text-align: center;
      padding: 50px;
      background-color: rgba(255, 255, 255, 0.8);
      border-radius: 10px;
      margin: 50px auto;
      max-width: 600px;
    }

    .big-text {
      font-size: 3em;
      font-weight: bold;
      color: #0080ff;
      margin-bottom: 20px;
    }

    .small-text {
      font-size: 1.5em;
      color: gray;
      margin-bottom: 30px;
    }

    .btn-register-now {
      background-color: #0080ff;
      color: white;
      font-size: 1.5em;
      padding: 15px 30px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .btn-register-now:hover {
      background-color: #005cbf;
    }

    .bottom-bar {
      background-color: #0080ff;
      padding: 10px 0;
      text-align: center;
      position: fixed;
      bottom: 0;
      width: 100%;
    }

    .bottom-bar a {
      color: white;
      font-size: 1.2em;
      margin-right: 15px;
    }

    .container {
      margin-top: 50px;
    }

    .category-btn {
      background-size: cover;
      background-position: center;
      border: none;
      border-radius: 10px;
      margin-bottom: 20px;
      padding: 50px 0;
      color: white;
      font-size: 1.5em;
      background-color: rgba(0, 0, 0, 0.5);
      /* Opacidad del fondo */
    }

    #inmunologia-btn {
      background-image: url('Inmunologia.jpeg');
    }

    #inmunologia-btn a {
      color: white;
      /* Cambia el color del texto a negro */
      text-decoration: none;
      /* Elimina el subrayado del enlace */
    }

    #fisioterapia-btn {
      background-image: url('Fisioterapia.jpg');
    }

    #nutricion-btn {
      background-image: url('Nutricion.jpg');
    }

    #psicologia-btn {
      background-image: url('Psicologia.png');
    }

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
  <?php
  session_start();
  ?>
</head>

<body>

  <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="Contacto.html"><img src="Logo.png" alt="Tu Logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
      <span class="welcome-text"><?php echo "🩻Bienvenido " . $_SESSION['nombre']; ?></span>
      <form class="form-inline my-2 my-lg-0 mx-auto">
        <input class="form-control mr-sm-2" type="text" placeholder="Buscar">
        <button class="btn btn-light" type="submit" aria-label="Buscar">Buscar</button>
      </form>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="Perfil.php">Regresar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Perfil_U.php">Perfil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Cerrar_Secion.php">Cerrar Sesión</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <a href="Inmunologia.php" style="text-decoration: none; border-bottom: none;">
          <button id="inmunologia-btn" class="category-btn btn btn-lg btn-block">Inmunologia</button>
        </a>
      </div>
      <div class="col-md-6">
        <a href="#" style="text-decoration: none; border-bottom: none;">
          <button id="fisioterapia-btn" class="category-btn btn btn-lg btn-block">Fisioterapia</button>
        </a>
      </div>
      <div class="col-md-6">
        <a href="#" style="text-decoration: none; border-bottom: none;">
          <button id="nutricion-btn" class="category-btn btn btn-lg btn-block">Nutrición</button>
        </a>
      </div>
      <div class="col-md-6">
        <a href="#" style="text-decoration: none; border-bottom: none;">
          <button id="psicologia-btn" class="category-btn btn btn-lg btn-block">Psicología</button>
        </a>
      </div>
    </div>
  </div>


</body>
<footer>
  <p>Derechos reservados, página con fines académicos &copy; 2024</p>
</footer>

</html>