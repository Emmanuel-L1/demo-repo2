<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: #f4f4f4;
            color: #333;
        }

        .navbar {
            background-color: #0080ff;
            padding: 15px 0;
        }

        .navbar-brand img {
            max-height: 60px;
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

        .curso-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .curso-img {
            max-width: 100%;
            border-radius: 10px;
        }

        .curso-title {
            font-size: 1.8em;
            color: #0080ff;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        .valoracion {
            color: #0080ff;
            font-size: 1.2em;
            margin-bottom: 5px;
        }

        .sku,
        .precio,
        .desc-envio {
            color: gray;
            font-size: 1.1em;
            margin-bottom: 5px;
        }

        .descripcion {
            font-size: 1.2em;
            color: #0080ff;
            margin-top: 10px;
            margin-bottom: 5px;
        }

        .caracteristicas {
            margin-bottom: 15px;
        }

        .caracteristicas li {
            color: #333;
            font-size: 1.1em;
            margin-bottom: 5px;
        }

        .cantidad {
            margin-bottom: 15px;
        }

        .btn-agregar {
            background-color: #0080ff;
            color: white;
            font-size: 1.2em;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-agregar:hover {
            background-color: #005cbf;
        }

        .caracteristicas-tecnicas {
            font-size: 1.1em;
            color: gray;
            margin-top: 10px;
            margin-bottom: 5px;
        }

        .terminos-devolucion a {
            color: #0080ff;
            font-size: 1.1em;
            text-decoration: none;
            transition: color 0.3s;
        }

        .terminos-devolucion a:hover {
            color: #005cbf;
        }

        .btn-calificar {
            background-color: #ffc107;
            color: #333;
            font-size: 1.2em;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }

        .btn-calificar:hover {
            background-color: #ffcd39;
            color: #333;
        }

        footer {
            background-color: #0080ff;
            color: white;
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
                    <a class="nav-link" href="Carrito_2.php">Carrito</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Categorias.php">Regresar</a>
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
            <div class="col-md-4">
                <div class="curso-container">
                    <img src="Inmunología_1.jpg" alt="Curso 1" class="curso-img">
                    <h2 class="curso-title"><a href="Inmunologia_Avanzada_Curso.php">Curso de Inmunología Avanzada</a></h2>
                    <p class="valoracion">Valoración: ★★★★★</p>
                    <p class="sku">SKU: MDAP74568</p>
                    <p class="precio">Precio: $350 MXN</p>
                    <p class="desc-envio">Envío de comprobante y liga de acceso incluido</p>
                    <p class="descripcion">Descripción:</p>
                    <ul class="caracteristicas">
                        <li>10 horas de contenido</li>
                        <li>Material de estudio incluido</li>
                        <li>Acceso de por vida</li>
                        <li>Exámenes prácticos</li>
                        <li>Foros de discusión</li>
                    </ul>
                    <select class="cantidad">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <form action='Carrito_1.php' method="post">
                        <input type="hidden" name="curso_id" value="1">
                        <button class="btn-agregar" type="submit" name="agregar_al_carrito">Agregar al carrito</button>
                    </form>
                    <p class="caracteristicas-tecnicas">Características técnicas: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac ligula in lectus fermentum pharetra.</p>
                    <p class="terminos-devolucion"><a href="Terminos_Devolución.html">Términos de entrega y devolución</a></p>
                    <button class="btn-calificar">Calificar</button>
                </div>
            </div>
            <!-- Repite este bloque para los otros dos cursos -->
            <div class="col-md-4">
                <div class="curso-container">
                    <img src="Inmunología_2.jpg" alt="Curso 2" class="curso-img" style="max-width: 100%;">
                    <!-- Información del segundo curso -->
                    <h2 class="curso-title">Curso de Inmunología Intermedia</h2>
                    <p class="valoracion">Valoración: ★★★★☆</p>
                    <p class="sku">SKU: MDAP74569</p>
                    <p class="precio">Precio: $260 MXN</p>
                    <p class="desc-envio">Envío de comprobante y liga de acceso incluido</p>
                    <p class="descripcion">Descripción:</p>
                    <ul class="caracteristicas">
                        <li>10 horas de contenido</li>
                        <li>Material de estudio incluido</li>
                        <li>Acceso de por vida</li>
                        <li>Exámenes prácticos</li>
                        <li>Foros de discusión</li>
                    </ul>
                    <select class="cantidad">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <form action='Carrito_1.php' method="post">
                        <input type="hidden" name="curso_id" value="2">
                        <button class="btn-agregar" type="submit" name="agregar_al_carrito">Agregar al carrito</button>
                    </form>
                    <p class="caracteristicas-tecnicas">Características técnicas: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac ligula in lectus fermentum pharetra.</p>
                    <p class="terminos-devolucion"><a href="Terminos_Devolución.html">Términos de entrega y devolución</a></p>
                    <button class="btn-calificar">Calificar</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="curso-container">
                    <img src="Inmunología_3.jpg" alt="Curso 3" class="curso-img" style="max-width: 100%;">
                    <!-- Información del tercer curso -->
                    <h2 class="curso-title">Curso de Inmunología Básica</h2>
                    <p class="valoracion">Valoración: ★★★★☆</p>
                    <p class="sku">SKU: MDAP74570</p>
                    <p class="precio">Precio: $199 MXN</p>
                    <p class="desc-envio">Envío de comprobante y liga de acceso incluido</p>
                    <p class="descripcion">Descripción:</p>
                    <ul class="caracteristicas">
                        <li>10 horas de contenido</li>
                        <li>Material de estudio incluido</li>
                        <li>Acceso de por vida</li>
                        <li>Exámenes prácticos</li>
                        <li>Foros de discusión</li>
                    </ul>
                    <select class="cantidad">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <form action='Carrito_1.php' method="post">
                        <input type="hidden" name="curso_id" value="3">
                        <button class="btn-agregar" type="submit" name="agregar_al_carrito">Agregar al carrito</button>
                    </form>
                    <p class="caracteristicas-tecnicas">Características técnicas: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac ligula in lectus fermentum pharetra.</p>
                    <p class="terminos-devolucion"><a href="Terminos_Devolución.html">Términos de entrega y devolución</a></p>
                    <button class="btn-calificar">Calificar</button>
                </div>
            </div>
        </div>
    </div>

</body>
<footer>
    <p>Derechos reservados, página con fines académicos &copy; 2024</p>
</footer>

</html>