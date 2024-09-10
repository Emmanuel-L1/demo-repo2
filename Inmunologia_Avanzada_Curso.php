<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: white;
            background-size: cover;
            margin-bottom: 60px;
            /* Ajuste para evitar que el footer se superponga al contenido inferior */
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
            background-color: #0080ff;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
        }

        /* Estilos adicionales para la sección de videos */
        .video-list {
            background-color: rgba(0, 128, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
        }

        .video-list h3 {
            color: #0080ff;
            margin-bottom: 15px;
        }

        .video-list li {
            margin-bottom: 10px;
        }

        .video-list li a {
            color: #005cbf;
            font-weight: bold;
            font-size: 1.1em;
        }

        .video-list li a:hover {
            color: #00408a;
            text-decoration: underline;
        }
    </style>

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

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="curso-container">
                    <h2>Curso de Inmunología Avanzada - Taller básico de interpretación electrocardiográfica</h2>
                    <p><strong>Valoración:</strong> ★★★★★</p>
                    <p><strong>SKU:</strong> MDAP74568</p>
                    <p><strong>Precio:</strong> $350 MXN</p>
                    <p><strong>Envío:</strong> Envío de comprobante y liga de acceso incluido</p>
                    <p><strong>Descripción:</strong> El Curso-Taller básico de interpretación electrocardiográfica ofrece una formación integral dirigida a estudiantes de medicina y otras áreas de la salud. Este programa académico se centra en proporcionar un entendimiento básico de los fundamentos de la electrocardiografía, abarcando aspectos como la anatomía y fisiología del corazón, la identificación de ritmos cardíacos y la interpretación básica de los mismos. A través de una combinación de clases teóricas y sesiones prácticas, los participantes adquirirán competencias para analizar y evaluar electrocardiogramas con facilidad. </p>
                    <p><strong>Características:</strong></p>
                    <ul>
                        <li>10 horas de contenido</li>
                        <li>Material de estudio incluido</li>
                        <li>Acceso de por vida</li>
                        <li>Exámenes prácticos</li>
                        <li>Foros de discusión</li>
                    </ul>
                    <p><strong>Características técnicas:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac ligula in lectus fermentum pharetra.</p>
                    <p><strong>Competencias a desarrollar:</strong></p>
                    <ul>
                        <li>Comprender los principios fundamentales de la anatomía y fisiología cardíaca.</li>
                        <li>Identificar y diferenciar ritmos cardíacos normales y anormales en un electrocardiograma (ECG).</li>
                        <li>Interpretar correctamente variaciones clínicas y hallazgos específicos en el ECG.</li>
                        <li>Aplicar conocimientos teóricos en la práctica clínica para el diagnóstico preciso.</li>
                        <li>Evaluar y analizar trazados electrocardiográficos de manera sistemática y metódica.</li>
                        <li>Integrar información clínica relevante con los resultados del ECG para un enfoque diagnóstico integral.</li>
                        <li>Comunicar de manera efectiva y clara los hallazgos electrocardiográficos a otros profesionales de salud.</li>
                    </ul>
                    <p><strong>Habilidades a obtener:</strong></p>
                    <ul>
                        <li>Destreza en la identificación visual de patrones y anomalías en el ECG.</li>
                        <li>Capacidad para realizar mediciones precisas de intervalos, segmentos y ondas en el ECG.</li>
                        <li>Habilidad para correlacionar síntomas clínicos con hallazgos electrocardiográficos.</li>
                        <li>Destrezas en la comunicación oral y escrita de resultados y conclusiones electrocardiográficas.</li>
                        <li>Habilidad para tomar decisiones clínicas basadas en la interpretación de ECGs</li>
                        <li>Competencia en la autogestión y el aprendizaje continuo para mantener y mejorar las habilidades en interpretación electrocardiográfica.</li>
                    </ul>
                    <p><a href="Terminos_Devolución.html">Términos de entrega y devolución</a></p>
                    <button class="btn btn-secondary">Calificar</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="video-list">
                    <h3>Contenido del curso</h3>
                    <?php
                    // Conexión a la base de datos (reemplaza los valores con los tuyos)
                    $servername = "localhost";
                    $username = "root";
                    $password = "SoyYoMismo.78";
                    $dbname = "MediAprende";

                    // Crear conexión
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Verificar la conexión
                    if ($conn->connect_error) {
                        die("Conexión fallida: " . $conn->connect_error);
                    }

                    // Verificar si el usuario ha realizado el pago
                    if (isset($_SESSION['nombre'])) {
                        $usuario = $_SESSION['nombre'];
                        $sql = "SELECT pago_realizado FROM usuario WHERE nombre = '$usuario'";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            $pago_realizado = $row["pago_realizado"];

                            if ($pago_realizado == 1) {
                                // El usuario ha realizado el pago, mostrar los enlaces a los videos
                                echo '<p>El acceso al contenido del curso ha sido desbloqueado. Gracias por tu compra 😊</p>';
                                echo '<li><a href="Video_1_CIA.php">1. Anatomía Básica del Corazón</a></li>';
                                echo '<li><a>2. Bases Electrocardiográficas</a></li>';
                                echo '<li><a>3. Interpretación del Electrocardiograma Normal</a></li>';
                                echo '<li><a>4. Identificación de Ritmos Anormales</a></li>';
                                echo '<li><a>5. Taller de Identificación de Ritmos</a></li>';
                                echo '<lu><a>Accede a nuestro contenido adicional</a></lu>';
                                echo '<li><a>Presentación: </a><a href="CETOACIDOSIS.pdf">CETOACIDOSIS</a></li>';
                                echo '<li><a>Presentación: </a><a href="ASMA.pdf">ASMA</a></li>';
                                echo '<li><a>Presentación: </a><a href="IVUS.pdf">IVUS</a></li>';
                            } else {
                                // El usuario no ha realizado el pago, mostrar un mensaje de que debe pagar
                                echo "<p>Debe realizar el pago para acceder al contenido completo del curso.</p>";
                                echo "<p>A continuación le dejamos la vista previa del primer contenido del curso.</p>";
                                echo '<li><a href="Video_1_CIA_P.php">Video 1</a></li>';
                            }
                        } else {
                            echo "Usuario no encontrado.";
                        }
                    }
                    $conn->close();
                    ?>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>Derechos reservados, página con fines académicos &copy; 2024</p>
    </footer>

</body>

</html>
