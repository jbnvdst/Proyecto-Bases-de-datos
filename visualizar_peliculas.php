<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Visualizar Películas</title>
    <link rel="stylesheet" href="styles/styles_main.css">
</head>
<body>
<?php
require_once('config.php');
$query = "SELECT * FROM pelicula";
$result = mysqli_query($conn, $query);
if ($result) { ?>
    <form method="post" action="eliminar_peliculas.php">
        <h3>Se han encontrado las siguientes películas:</h3>
        <table>
            <tr>
                <th>Eliminar</th>
                <th>Título</th>
                <th>Duración</th>
                <th>Página Web</th>
                <th>Director</th>
                <th>Género</th>
                <th>Productora</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><input type="checkbox" name="eliminar[]" value="<?php echo $row['id']; ?>"></td>
                    <td><?php echo $row['titulo']; ?></td>
                    <td><?php echo $row['duracion']; ?></td>
                    <td><?php echo $row['web']; ?></td>
                    <td><?php echo $row['Director']; ?></td>
                    <td><?php echo $row['Genero']; ?></td>
                    <td><?php echo $row['Productora']; ?></td>
                </tr>
                <?php
            } ?>
        </table>
        <input style="margin-top: 35px" type="submit" value="Eliminar películas seleccionadas">
    </form>
    <?php
} else { ?>
    <h3>No se han encontrado películas</h3>
    <?php
}
?>
<a href="_1_main.php">Volver</a>
</body>
</html>