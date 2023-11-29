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

//sql to alter table
$sql1 = "ALTER TABLE director ADD COLUMN fecha_nacimiento DATE NOT NULL";

$sql2 = "ALTER TABLE productora ADD COLUMN fecha_creacion DATE NOT NULL";

if ($conn->query($sql1) === TRUE) {
    echo "Table director altered successfully \n";
} else {
    echo "Error altering table: " . $conn->error;
}

if ($conn->query($sql2) === TRUE) {
    echo "Table productora altered successfully \n";
} else {
    echo "Error altering table: " . $conn->error;
}
?>