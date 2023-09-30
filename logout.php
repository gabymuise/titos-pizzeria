<?php
session_start(); // Inicia la sesión

// Destruye todas las variables de sesión
$_SESSION = array();

// Cierra la sesión
session_destroy();

// Redirige al usuario a la página de inicio
header("Location: index.html");
?>