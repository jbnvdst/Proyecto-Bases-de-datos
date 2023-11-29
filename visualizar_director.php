<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Visualizar Director</title>
    <link rel="stylesheet" href="styles/styles_main.css">
</head>
<?php
require_once('config.php');
$query = "SELECT * FROM director";
$result = mysqli_query($conn, $query);
if ($result) { ?>
    <form method="post" action="eliminar_director.php">
        <h3>Se han encontrado los siguientes directores:</h3>
        <table>
            <tr>
                <th>Eliminar</th>
                <th>Nombre</th>
                <th>Tipo de Documento</th>
                <th>País</th>
                <th>Sexo</th>
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
        <input style="margin-top: 35px" type="submit" value="Eliminar directores seleccionados">
    </form>
    <?php
} else { ?>
    <h3>No se han encontrado directores</h3>
    <?php
}