<?php
$servername = "localhost";
$username = "admin";
$password = "password";
$dbname = "automoviles";

$nombreArchivo = "automoviles.sql";

$command = "mysqldump -h".$servername. "-u".$username. "-p".$password ."--opt".$dbname." > $nombreArchivo";

$output = shell_exec($command);
$exitCode = 0;
exec("echo $? 2>&1", $output, $exitCode);

if ($exitCode === 0) {
    echo "La base de datos ha sido respaldada correctamente.";
} else {
    echo "Error al respaldar la base de datos. Código de salida: $exitCode";
}


?>