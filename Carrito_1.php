<?php
session_start();

// Función para agregar un curso al carrito
function agregarAlCarrito($curso_id) {
    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = array();
    }
    // Agregar el ID del curso al arreglo del carrito
    $_SESSION['carrito'][] = $curso_id;
}

// Verificar si se ha enviado un curso para agregar al carrito
if (isset($_POST['agregar_al_carrito'])) {
    agregarAlCarrito($_POST['curso_id']);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
}
?>