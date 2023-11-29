<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Alta Actor</title>
    <link rel="stylesheet" href="styles/styles_main.css">
</head>
<?php
require_once('config.php');
$nombre = $_POST['nombre'];
$tipo_documento = $_POST['tipo_documento'];
$sexo = $_POST['sexo'];
$origen = $_POST['origen'];

$query = "INSERT INTO actor (nombre, tipo_documento, sexo, origen) VALUES ('$nombre', '$tipo_documento', '$sexo', '$origen')";
$result = mysqli_query($conn, $query);
if ($result) { ?>
    <h3>Se ha dado de alta el actor</h3>
    <?php
} else { ?>
    <h3>No se ha podido dar de alta el actor</h3>
    <?php
}
?>

<body>
    <a href="_1_main.php">Volver</a>
</body>
</html>