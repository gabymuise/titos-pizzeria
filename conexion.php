<?php
// Define las constantes para la conexión a la base de datos
define("HOST_DB", "localhost");
define("USER_DB", "root");
define("PASS_DB", "");
define("NAME_DB", "usuarios");

// Intenta conectar a la base de datos utilizando mysqli
$conexion = new mysqli(
    constant("HOST_DB"),
    constant("USER_DB"),
    constant("PASS_DB"),
    constant("NAME_DB")
);

// Verifica si la conexión tuvo éxito
if ($conexion->connect_error) {
    die("La conexión a la base de datos falló: " . $conexion->connect_error);
}
?>