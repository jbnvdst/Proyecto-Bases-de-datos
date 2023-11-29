<?php
$movie = $_GET['search_movie'];
require_once('config.php');
$query = "SELECT * FROM pelicula WHERE titulo = '$movie'";
$result = mysqli_query($conn, $query);
if ($result) {
    echo "<table>";
    echo "<tr>";
    echo "<th>Título</th>";
    echo "<th>Duración</th>";
    echo "<th>Web</th>";
    echo "<th>Director</th>";
    echo "<th>Género</th>";
    echo "<th>Productora</th>";
    echo "</tr>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['titulo'] . "</td>";
        echo "<td>" . $row['duracion'] . "</td>";
        echo "<td>" . $row['web'] . "</td>";
        echo "<td>" . $row['Director'] . "</td>";
        echo "<td>" . $row['Genero'] . "</td>";
        echo "<td>" . $row['Productora'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No se encontró la película";
}
?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Buscar Película</title>
    <link rel="stylesheet" href="styles/styles_main.css">
</head>
<body>
    <a href="_1_main.php">Volver</a>
</body>
</html>