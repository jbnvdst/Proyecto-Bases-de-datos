<?php
$servername = "localhost";
$username = "admin";
$password = "password";
$dbname = "streaminservices";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

//sql to create table
$sql1 = "CREATE TABLE director (
    id INT NOT NULL AUTO_INCREMENT, 
    nombre varchar(255) NOT NULL,
    origen varchar(255) NOT NULL,
    tipo_documento varchar(255) NOT NULL,
    sexo varchar(255) NOT NULL,
    PRIMARY KEY (id))";

$sql2 = "CREATE TABLE productora (
    rut INT NOT NULL AUTO_INCREMENT,
    denominacion varchar(255) NOT NULL,
    telefono varchar(255) NOT NULL,
    PRIMARY KEY (rut))";

if ($conn->query($sql1) === TRUE) {
    echo "Table director created successfully \n";
} else {
    echo "Error creating table: " . $conn->error;
}

if ($conn->query($sql2) === TRUE) {
    echo "Table productora created successfully \n";
} else {
    echo "Error creating table: " . $conn->error;
}
?>