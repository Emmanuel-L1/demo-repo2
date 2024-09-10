<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video del curso</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        .container {
            display: flex;
            max-width: 100%;
            margin: 0 auto;
        }

        .video-container {
            flex: 3;
            margin-right: 20px;
        }

        video {
            width: 100%;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .content-container {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .temario {
            background-color: #f8f9fa;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: auto;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .temario h3 {
            color: #007bff;
            margin-top: 0;
            margin-bottom: 15px;
        }

        .temario ul {
            list-style: none;
            padding: 0;
        }

        .temario li {
            margin-bottom: 8px;
            padding-left: 20px;
            position: relative;
        }

        .temario li:before {
            content: "•";
            color: #007bff;
            display: inline-block;
            width: 1em;
            position: absolute;
            left: 0;
            top: 2px;
        }

        .question {
            margin-bottom: 20px;
        }

        .question h3 {
            color: #007bff;
            margin-top: 0;
            margin-bottom: 10px;
        }

        .question p {
            margin-bottom: 15px;
        }

        .answer-input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .answer-input:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .btn-group {
            margin-bottom: 20px;
            margin-top: auto;
        }

        .btn {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
            transition: background-color 0.3s ease-in-out;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .message-container {
            margin-top: 10px;
            padding: 10px 20px;
            border-radius: 5px;
            display: none;
            position: relative;
        }

        .success-message {
            background-color: #28a745;
        }

        .error-message {
            background-color: #dc3545;
        }

        .message-text {
            color: white;
            margin: 0;
        }

        footer {
            background-color: #0080ff;
            color: white;
            text-align: center;
            padding: 5px 0;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
        }

        /* Estilos para el modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            border-radius: 10px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="video-container">
            <h2>3. Interpretación del Electrocardiograma Normal</h2>
            <video controls>
                <source src="video1.mp4" type="video/mp4">
                Tu navegador no soporta el elemento de video.
            </video>
        </div>

        <div class="content-container">
            <div class="temario">
                <h3>Temario del video:</h3>
                <ul>
                    <strong>3. Interpretación del Electrocardiograma Normal</strong>
                    <ul>
                        <li>Preparación y adquisición del ECG</li>
                        <li>Identificación de las Ondas y Complejos</li>
                        <li>Medición de Intervalos y Segmentos</li>
                        <li>Evaluación del Ritmo Cardíaco</li>
                        <li> Interpretación Integrada del ECG Normal</li>
                    </ul>
                    <strong>Presta atención al contenido del video y realiza tus apuntes ya que al finalizar el video tendrás que responder un breve examen para poder continuar avanzando con el contenido.</strong>
                </ul>
            </div>

            <button id="openModalBtn" class="btn">Realizar Examen</button>

            <div id="examModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <div class="question">
                        <h3>Pregunta del examen:</h3>
                        <p>¿Cuál es la capital de Francia?</p>
                        <input type="text" id="answer" class="answer-input">
                        <button class="btn" onclick="checkAnswer()">Verificar respuesta</button>
                        <div id="answerMessage" class="message-container"></div>
                    </div>
                </div>
            </div>

            <div class="btn-group">
                <button class="btn" onclick="history.back()">Regresar</button>
                <button id="nextBtn" class="btn" onclick="nextVideo()">Pasar al siguiente video</button>
                <div id="nextVideoMessage" class="message-container"></div>
            </div>
        </div>
    </div>

    <script>
        function showMessage(message, type, containerId) {
            var messageContainer = document.getElementById(containerId);
            messageContainer.innerText = message;
            messageContainer.className = 'message-container ' + type;
            messageContainer.style.display = 'block';
        }

        function hideMessage(containerId) {
            var messageContainer = document.getElementById(containerId);
            messageContainer.style.display = 'none';
        }

        function checkAnswer() {
            var answer = document.getElementById('answer').value;
            var answerMessage = document.getElementById('answerMessage');
            if (answer.trim() === '') {
                showMessage('Por favor, responde la pregunta antes de continuar.', 'error-message', 'answerMessage');
            } else if (answer.toLowerCase() === 'parís') {
                hideMessage('answerMessage');
                showMessage('Respuesta correcta. Puedes avanzar al siguiente video.', 'success-message', 'nextVideoMessage');
                document.getElementById('nextBtn').disabled = false; // Habilitar el botón para pasar al siguiente video
            } else {
                hideMessage('answerMessage');
                showMessage('Respuesta incorrecta. Inténtalo de nuevo.', 'error-message', 'nextVideoMessage');
            }
        }

        function nextVideo() {
            var answer = document.getElementById('answer').value;
            var answerMessage = document.getElementById('answerMessage');
            if (answer.trim() === '') {
                showMessage('Por favor, responde la pregunta antes de continuar.', 'error-message', 'answerMessage');
            } else {
                window.location.href = 'Video_4_CIA.php'; // Cambia "video2.php" por la URL del siguiente video
            }
        }

        // Función para abrir el modal
        document.getElementById('openModalBtn').onclick = function () {
            document.getElementById('examModal').style.display = "block";
        }

        // Función para cerrar el modal
        document.getElementsByClassName('close')[0].onclick = function () {
            document.getElementById('examModal').style.display = "none";
        }

        // Cerrar modal si se hace clic fuera del contenido
        window.onclick = function (event) {
            if (event.target == document.getElementById('examModal')) {
                document.getElementById('examModal').style.display = "none";
            }
        }
    </script>

</body>

<footer>
    <p>Derechos reservados, página con fines académicos &copy; 2024</p>
</footer>

</html>
