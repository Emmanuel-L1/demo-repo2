<?php
session_start();
if (isset($_SESSION["nombre"])) {
    unset($_SESSION["nombre"]);
    header("location:Index.html");
    exit;
} else {
    header("location:Index.html");
    exit;
}
