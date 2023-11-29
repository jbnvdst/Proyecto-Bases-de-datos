<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Películas</title>
    <link rel="stylesheet" href="styles/styles_main.css">
</head>
<body>
<?php
require_once('config.php');
if (isset($_POST['eliminar'])) {
    $eliminar = $_POST['eliminar'];
    foreach ($eliminar as $id) {
        $query = "DELETE FROM pelicula WHERE id = $id";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            echo "Error al eliminar la película con id $id";
        }
    }
}
header('Location: visualizar_peliculas.php');
?>