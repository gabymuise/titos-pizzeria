<?php
// Incluimos el script de conexión
require_once 'conexion.php';
session_start(); 

// Tomamos los datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];

// Usamos password_hash() para crear un nuevo hash de contraseña
$passwordHash = password_hash($password, PASSWORD_DEFAULT);

// Creamos la consulta INSERT con las variables obtenidas del formulario
$sql = "INSERT INTO usuarios VALUES(";
$sql .= "'" . $username . "', '" . $passwordHash . "', '" . $email . "', '" . $nombre . "', '" . $apellido . "')";

// Ejecutamos la consulta mediante el objeto $conexion que instanciamos en el script conexion.php
$conexion->query($sql);

// Redirigimos a la página de inicio de sesión
header("Location: login.html");
?>