<?php
$directory = 'C:\wamp64\www\basededatos'; // replace with your directory

if (is_writable($directory)) {
    echo 'PHP tiene permisos de escritura en el directorio.';
} else {
    echo 'PHP no tiene permisos de escritura en el directorio.';
}
?>