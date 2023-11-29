<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Visualizar Actores</title>
    <link rel="stylesheet" href="styles/styles_main.css">
</head>
<body>
<?php
require_once('config.php');
$query = "SELECT * FROM actor";
$result = mysqli_query($conn, $query);
if ($result) { ?>
    <form method="post" action="eliminar_actor.php">
        <h3>Se han encontrado los siguientes actores:</h3>
        <br>
        <table>
            <tr>
                <th>Eliminar</th>
                <th>Nombre</th>
                <th>Tipo de Documento</th>
                <th>Número de Documento</th>
                <th>Fecha de Nacimiento</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><input type="checkbox" name="eliminar[]" value="<?php echo $row['id']; ?>"></td>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php echo $row['tipo_documento']; ?></td>
                    <td><?php echo $row['origen']; ?></td>
                    <td><?php echo $row['sexo']; ?></td>
                </tr>
                <?php
            } ?>
        </table>
        <input style="margin-top: 35px" type="submit" value="Eliminar actores seleccionados">
    </form>
    <?php
} else { ?>
    <h3>No se han encontrado actores</h3>
    <?php
}