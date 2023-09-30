<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Incluir el archivo de conexión a la base de datos
    require_once 'conexion.php';

    // Obtener los datos del formulario
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

    // Validar los datos (puedes agregar más validaciones según tus requerimientos)

    // Insertar los datos en la base de datos
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (usuario, password, email, nombre, apellido) ";
    $sql .= "VALUES ('$username', '$passwordHash', '$email', '$nombre', '$apellido')";

    if ($conexion->query($sql) === TRUE) {
        // Registro exitoso, redirigir a la página de inicio de sesión
        header("Location: login.html");
    } else {
        // Error al registrar, redirigir a una página de error o mostrar un mensaje de error
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }

    // Cerrar la conexión a la base de datos
    $conexion->close();
} else {
    // Redirigir si se accede directamente a este archivo sin enviar el formulario
    header("Location: nuevo-usuario.php");
}
?>