<?php
// Inicializar variables para mensajes de éxito y error
$success_message = $error_message = "";

// Verificar si el formulario de pedido se ha enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $tipoPizza = $_POST["tipo-pizza"];
    $cantidad = $_POST["cantidad"];
    $direccionEntrega = $_POST["direccion"];

    // Validar los datos (puedes agregar más validaciones según tus necesidades)

    // Conectar a la base de datos (ajusta los detalles de conexión según tu configuración)
    $conexion = mysqli_connect("localhost", "root", "", "pedidos");

    if (!$conexion) {
        die("La conexión a la base de datos falló: " . mysqli_connect_error());
    }

    // Preparar la consulta SQL para insertar el pedido sin especificar un id
    $sql = "INSERT INTO pedidos (tipo_pizza, cantidad, direccion_entrega) VALUES ('$tipoPizza', $cantidad, '$direccionEntrega')";

    if (mysqli_query($conexion, $sql)) {
        $success_message = "Pedido realizado con éxito.";
    } else {
        $error_message = "Error al realizar el pedido: " . mysqli_error($conexion);
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pedido.css">
    <title>Realizar Pedido</title>
</head>
<body>
    <header>
        <div class="header-box">
            <h1>Realizar Pedido</h1>
        </div>
        <nav>
            <ul>
                <li><a href="main.html">Volver al Inicio</a></li>
            </ul>
        </nav>
    </header>

    <section class="order-form">
        <form action="" method="post">
            <label for="tipo-pizza">Tipo de Pizza:</label>
            <select name="tipo-pizza" id="tipo-pizza">
                <option value="">Eligir Pizza</option>
                <option value="margarita">Pizza Margarita</option>
                <option value="pepperoni">Pizza Pepperoni</option>
                <option value="hawaiana">Pizza Hawaiana</option>
                <option value="cuatro quesos">Pizza Cuatro Quesos</option>
                <option value="vegetariana">Pizza Vegetariana</option>
                <option value="mozzarella">Pizza Mozzarella</option>
                <option value="napolitana">Pizza Napolitana</option>
                <option value="calzone">Pizza Calzone</option>
                <option value="bbq_chicken">Pizza BBQ_Chicken</option>
                <option value="mexicana">Pizza Mexicana</option>
                <option value="hawaiana_deluxe">Pizza Hawaiana_Deluxe</option>
                <!-- Agrega más opciones de pizza aquí -->
            </select>
            <br><br>

            <label for="cantidad">Cantidad:</label>
            <input type="number" name="cantidad" id="cantidad" min="1" value="1">
            <br><br>

            <label for="direccion">Dirección de Entrega:</label>
            <input type="text" name="direccion" id="direccion" required>
            <br><br>

            <button type="submit" class="cta-button">Realizar Pedido</button>
        </form>

        <?php
        // Mostrar mensajes de éxito y error
        if (!empty($success_message)) {
            echo '<div class="success-message">' . $success_message . '</div>';
        }
        if (!empty($error_message)) {
            echo '<div class="error-message">' . $error_message . '</div>';
        }
        ?>
    </section>

    <footer>
        <p>© 2023 Pizzeria Tito's. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
