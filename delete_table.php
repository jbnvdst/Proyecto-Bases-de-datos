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

//sql to delete table
$sql1 = "DROP TABLE director";

$sql2 = "DROP TABLE productora";

if ($conn->query($sql1) === TRUE) {
    echo "Table director deleted successfully \n";
} else {
    echo "Error deleting table: " . $conn->error;
}

if ($conn->query($sql2) === TRUE) {
    echo "Table productora deleted successfully \n";
} else {
    echo "Error deleting table: " . $conn->error;
}
?>