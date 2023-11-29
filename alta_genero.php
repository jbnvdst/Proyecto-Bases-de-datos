<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Alta Género</title>
    <link rel="stylesheet" href="styles/styles_main.css">
</head>
<?php
require_once('config.php');
$nombre = $_POST['nombre'];
$contrato = $_POST['Contrato'];

$query = "INSERT INTO genero (nombre, contrato) VALUES ('$nombre', '$contrato')";
$result = mysqli_query($conn, $query);
if ($result) { ?>
    <h3>Se ha dado de alta el género</h3>
    <?php
} else { ?>
    <h3>No se ha podido dar de alta el género</h3>
    <?php
}
?>

<body>
    <a href="_1_main.php">Volver</a>
</body>
</html>
