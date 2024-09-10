<?php
//conectar con el servidor
$conectar = mysqli_connect("localhost", "root", "SoyYoMismo.78", "MediAprende");
//verificar coneccion
if (!$conectar) {
    echo "No fue posible conectar con el servidor ponte en contacto con el editor de la pagina :(";
}
