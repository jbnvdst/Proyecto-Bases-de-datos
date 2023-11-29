<?php
$servername = "localhost";
$username = "admin";
$password = "password";
//$dbname = "automoviles";

//create connection
$conn = new mysqli($servername, $username, $password);

//check connection
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$sql = file_get_contents("automoviles.sql");

if($conn->multi_query($sql)){
    do {
        //Vacía los resultados
        if($result = $conn->store_result()){
            $result->free();
        }
    } while ($conn->more_results() && $conn->next_result());
    echo "Database restored successfully";
}
else{
    echo "Error restoring database: " . $conn->error;
}

$conn->close();
?>