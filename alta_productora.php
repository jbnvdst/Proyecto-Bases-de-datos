<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Alta Productora</title>
    <link rel="stylesheet" href="styles/styles_main.css">
</head>
<?php
require_once('config.php');
$rut = $_POST['rut'];
$denominacion = $_POST['denominacion'];
$telefono = $_POST['telefono'];

$query = "INSERT INTO productora (rut, denominacion, telefono) VALUES ('$rut', '$denominacion', '$telefono')";
$result = mysqli_query($conn, $query);
if ($result) { ?>
    <h3>Se ha dado de alta la productora</h3>
    <?php
} else { ?>
    <h3>No se ha podido dar de alta la productora</h3>
    <?php
}
?>

<body>
    <a href="_1_main.php">Volver</a>
</body>
</html>