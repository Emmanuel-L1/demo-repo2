<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi carrito de compras</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: url('Fondo.jpg') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
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
        <a class="navbar-brand" href="Conocenos.html"><img src="Logo.png" alt="Tu Logo"></a>
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
                    <a class="nav-link" href="Inmunologia.php">Regresar</a>
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

    <div class="main-content">
        <h1 class="big-text">Mi carrito de compras</h1>
        <?php
        // Verificar si hay cursos en el carrito
        if (!empty($_SESSION['carrito'])) {
            foreach ($_SESSION['carrito'] as $curso_id) {
                // Aquí puedes mostrar los detalles del curso usando el ID del curso
                // Recuperar detalles del curso desde la base de datos usando el $curso_id
                // Conecta con la base de datos (reemplaza con tus credenciales)
                $servername = "localhost";
                $username = "root";
                $password = "SoyYoMismo.78";
                $dbname = "MediAprende";

                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                    die("Error de conexión: " . $conn->connect_error);
                }

                // Consulta SQL para obtener los detalles del curso
                $sql = "SELECT * FROM cursos WHERE id_curso = $curso_id";
                $result = $conn->query($sql);

                // Verifica si se encontraron resultados
                if ($result->num_rows > 0) {
                    // Recorre los resultados y muestra los detalles del curso
                    while ($row = $result->fetch_assoc()) {
                        // Aquí puedes acceder a los detalles del curso
                        $nombre_curso = $row["nombre"];
                        $valoracion_curso = $row["valoracion"];
                        $sku_curso = $row["sku"];
                        $precio_curso = $row["precio"];
                        $envio_curso = $row["envio"];
                        // ... y así sucesivamente para otros detalles del curso
                    }
                } else {
                    echo "No se encontraron cursos con el ID proporcionado.";
                }

                // Cierra la conexión con la base de datos
                $conn->close();
        ?>
                <div class="curso-container">
                    <!-- Otros detalles del curso -->
                    <h2 class="curso-title"><?php echo $nombre_curso; ?></h2>
                    <p class="valoracion"><?php echo $valoracion_curso; ?></p>
                    <p class="sku"><?php echo $sku_curso; ?></p>
                    <p class="precio"><?php echo $precio_curso; ?></p>
                    <p class="envio"><?php echo $envio_curso; ?></p>
                    <!-- Dentro del bucle foreach que muestra los cursos en el carrito -->
                    <!--<button class="btn btn-primary btn-comprar-ahora" onclick="comprarAhora(<?php echo $curso_id; ?>)">Comprar ahora</button>-->
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                        <input type="hidden" name="cmd" value="_s-xclick" />
                        <input type="hidden" name="hosted_button_id" value="5HAFVEY7KRSG6" />
                        <input type="hidden" name="currency_code" value="MXN" />
                        <input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" title="PayPal es una forma segura y fácil de pagar en línea." alt="Comprar ahora" />
                    </form>
                    <!-- Otros detalles del curso -->
                </div>
        <?php
            }
        } else {
            echo "<p>Tu carrito está vacío.</p>";
        }
        ?>
        <!-- Fuera de la etiqueta PHP en tu archivo PHP -->
        <script>
            function comprarAhora(cursoId) {
                window.location.href = 'confirmar_compra.php?curso_id=' + cursoId;
            }
        </script>

        <button class="btn btn-danger btn-vaciar-carrito" onclick="vaciarCarrito()">Vaciar carrito</button>
    </div>

    <footer>
        <p>Derechos reservados, página con fines académicos &copy; 2024</p>
    </footer>

    <script>
        function vaciarCarrito() {
            // Elimina el carrito de la sesión
            <?php unset($_SESSION['carrito']); ?>

            // Redirige a la misma página para actualizar la visualización del carrito
            location.reload();
        }
    </script>

</body>

</html>