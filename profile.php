<?php
session_start();
if (!isset($_SESSION['logueado'])) {
    header("Location: index.html");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Perfil de Usuario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
    <style type="text/css">

    </style>
    <script type="text/javascript">

    </script>
</head>
<body>
    <div id="contenedor">
        <div id="central">
            <div id="perfil">
                <div class="titulo-profile">
                    Bienvenido <?php echo ($_SESSION['nombre']); ?>
                </div>
                <form action="logout.php" method="post">
                    <button type="submit" title="Salir" name="salir">Cerrar Sesión</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>