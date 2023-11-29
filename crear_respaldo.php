<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Respaldo</title>
    <link rel="stylesheet" href="styles/styles_main.css">
</head>
<body>
<?php
require_once('config.php');

// Define the backup file name
$backupFile = 'respaldo_' . date('Y-m-d_H-i-s') . '.sql';

// Create the mysqldump command
$command = 'mysqldump --user=' . $username . ' --password=' . $password . ' --host=' . $servername . ' ' . $dbname . ' > ' . $backupFile;

// Execute the command
system($command);

?>
<h3>Respaldo creado con éxito: </h3><?php echo $backupFile;?>
</body>