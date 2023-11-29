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

?>
