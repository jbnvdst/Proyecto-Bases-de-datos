<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Alta Película</title>
    <link rel="stylesheet" href="styles/styles_main.css">
</head>
<?php
require_once('config.php');
$titulo = $_POST['titulo'];
$duracion = $_POST['duracion'];
$web = $_POST['web'];
$director = $_POST['director'];
$genero = $_POST['genero'];
$productora = $_POST['productora'];

$query = "INSERT INTO pelicula (titulo, duracion, web, Director, Genero, Productora) VALUES ('$titulo', '$duracion', '$web', '$director', '$genero', '$productora')";
$result = mysqli_query($conn, $query);
if ($result) { ?>
    <h3>Se ha dado de alta la película</h3>
    <?php
} else { ?>
    <h3>No se ha podido dar de alta la película</h3>
    <?php
}
?>

<body>
    <a href="_1_main.php">Volver</a>
</body>
</html>