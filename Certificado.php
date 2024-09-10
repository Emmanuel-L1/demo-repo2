<?php
session_start();
$Usuario = $_SESSION['nombre'];
require('Conexion_Modificar.php');
$query = "SELECT * FROM usuario WHERE nombre='$Usuario'";
$resultado = $mysqli->query($query);
$row = $resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificado de Conclusión</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f5f9;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #007bff;
            margin-bottom: 20px;
        }

        h2 {
            color: #0056b3;
            margin-bottom: 10px;
        }

        h3 {
            color: #0056b3;
            margin-bottom: 30px;
        }

        p {
            font-size: 18px;
            margin-bottom: 20px;
            color: #333;
        }

        .signature {
            margin-top: 50px;
        }

        .signature img {
            width: 200px;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        .signature p {
            font-style: italic;
            color: #666;
        }

        .date {
            font-size: 14px;
            color: #666;
            margin-top: 30px;
        }

        .btn-container {
            display: none; /* Ocultar el contenedor de botones en el PDF */
        }

        .btn {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            margin-top: 20px;
            display: inline-block;
            transition: background-color 0.3s ease-in-out;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        /* Mostrar el contenedor de botones solo en la página web */
        @media screen {
            .btn-container {
                display: block;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Certificado de Conclusión</h1>
        <div class="signature">
            <img src="Logo.png" alt="Firma del instructor">
        </div>
        <p>Por la presente se certifica que</p>
        <h2><?php echo $row['nombre']; ?><a> </a><?php echo $row['apellido']; ?></h2>
        <p>ha completado el</p>
        <h3>Curso: Taller básico de interpretación electrocardiográfica</h3>
        <div class="signature">
            <img src="firma.png" alt="Firma del instructor">
            <p>Firma del Instructor</p>
        </div>
        <p class="date">Fecha: <span id="currentDate"></span></p>
        <div class="btn-container">
            <button id="downloadBtn" class="btn">Descargar como PDF</button>
            <button class="btn"><a href="Inmunologia_Avanzada_Curso.php">Regresar</a></button>
        </div>
    </div>

    <script>
        // Obtener la fecha actual
        const currentDate = new Date();
        const formattedDate = currentDate.toLocaleDateString('es-ES', {
            day: 'numeric',
            month: 'long',
            year: 'numeric'
        });
        document.getElementById('currentDate').innerText = formattedDate;

        // Generar PDF al hacer clic en el botón
        document.getElementById('downloadBtn').addEventListener('click', function () {
            const pdf = new jsPDF();
            const element = document.querySelector('.container');
            pdf.html(element, {
                callback: function (pdf) {
                    pdf.save("Certificado_<?php echo $row['nombre'] . '_' . $row['apellido']; ?>.pdf");
                }
            });
        });
    </script>

</body>

</html>
