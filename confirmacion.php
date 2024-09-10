<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de compra</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            text-align: center;
            padding: 50px;
        }

        h1 {
            font-size: 2em;
            color: #007bff;
        }

        p {
            font-size: 1.2em;
            margin-bottom: 20px;
        }

        #countdown {
            font-size: 1.5em;
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <h1>¡Gracias por tu compra!</h1>
    <p>Tu pedido ha sido confirmado. Pronto recibirás un correo electrónico con los detalles de tu compra.</p>
    <div id="countdown">Serás redirigido en <span id="timer">5</span> segundos...</div>

    <script>
        // Contador de redirección
        let count = 5;
        const countdownEl = document.getElementById('timer');

        const countdown = setInterval(() => {
            count--;
            countdownEl.textContent = count;
            if (count === 0) {
                clearInterval(countdown);
                // Redirigir a la página anterior
                window.history.back();
            }
        }, 1000);
    </script>
</body>

</html>
