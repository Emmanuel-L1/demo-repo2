<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();

    // Verificar si se recibió el ID del curso a comprar
    // Recuperar el ID del curso desde la URL
    $curso_id = 1;

    // Conectar a la base de datos (reemplaza con tus credenciales)
    $servername = "localhost";
    $username = "root";
    $password = "SoyYoMismo.78";
    $dbname = "mediaprende";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Obtener el ID del usuario basado en su nombre almacenado en $_SESSION['nombre']
    $nombre_usuario = $_SESSION['nombre'];
    $sql_select_id_usuario = "SELECT id_usuario FROM usuario WHERE nombre = '$nombre_usuario'";
    $result = $conn->query($sql_select_id_usuario);

    if ($result->num_rows > 0) {
        // Si se encuentra el usuario, obtener su ID
        $row = $result->fetch_assoc();
        $id_usuario = $row['id_usuario'];

        // Consulta SQL para actualizar el valor "pago_realizado" en la tabla de usuarios
        $sql_update_pago_realizado = "UPDATE usuario SET pago_realizado = $curso_id WHERE id_usuario = $id_usuario";

        if ($conn->query($sql_update_pago_realizado) === TRUE) {
            // Si la actualización se realiza correctamente, redirigir al usuario a la página de confirmación de compra.
            header('Location: confirmacion.php');
            exit();
        } else {
            echo "Error al actualizar el pago realizado: " . $conn->error;
        }
    } else {
        echo "No se encontró ningún usuario con el nombre: $nombre_usuario";
    }

    // Cierra la conexión con la base de datos
    $conn->close();
    ?>




</body>

</html>