<?php
require_once("config.php");

echo "ORDER BY ASC";
echo "<br><br>";

$sql = "SELECT * FROM actor ORDER BY nombre ASC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["id"] . " - Nombre: " . $row["nombre"] . " - Tipo de documento: " . $row["tipo_documento"] . " - Origen: " . $row["origen"] . " - Sexo: " . $row["sexo"] . "<br>";
    }
} else {
    echo "0 resultados";
}

echo "<br><br>";
echo "GROUP BY";
echo "<br><br>";

$sql1 = "SELECT * FROM director GROUP BY origen";
$result1 = mysqli_query($conn, $sql1);

if (mysqli_num_rows($result1) > 0) {
    while ($row = mysqli_fetch_assoc($result1)) {
        echo "ID: " . $row["id"] . " - Nombre: " . $row["nombre"] . " - Tipo de documento: " . $row["tipo_documento"] . " - Origen: " . $row["origen"] . " - Sexo: " . $row["sexo"] . "<br>";
    }
} else {
    echo "0 resultados";
}

echo "<br><br>";
echo "ORDER BY DESC";
echo "<br><br>";

$sql2 = "SELECT * FROM pais ORDER BY version DESC";
$result2 = mysqli_query($conn, $sql2);

if (mysqli_num_rows($result2) > 0) {
    while ($row = mysqli_fetch_assoc($result2)) {
        echo " - Nombre: " . $row["Nombre_locacion"] . " - Version: " . $row["Version"] . "<br>";
    }
} else {
    echo "0 resultados";
}

echo "<br><br>";
echo "HAVING";
echo "<br><br>";

$sql3 = "SELECT * FROM actor HAVING origen = 'Mexico'";
$result3 = mysqli_query($conn, $sql3);

if (mysqli_num_rows($result3) > 0) {
    while ($row = mysqli_fetch_assoc($result3)) {
        echo "ID: " . $row["id"] . " - Nombre: " . $row["nombre"] . " - Tipo de documento: " . $row["tipo_documento"] . " - Origen: " . $row["origen"] . " - Sexo: " . $row["sexo"] . "<br>";
    }
} else {
    echo "0 resultados";
}

echo "<br><br>";
echo "LIMIT";
echo "<br><br>";

$sql4 = "SELECT * FROM actor LIMIT 3";
$result4 = mysqli_query($conn, $sql4);
if (mysqli_num_rows($result4) > 0) {
    while ($row = mysqli_fetch_assoc($result4)) {
        echo "ID: " . $row["id"] . " - Nombre: " . $row["nombre"] . " - Tipo de documento: " . $row["tipo_documento"] . " - Origen: " . $row["origen"] . " - Sexo: " . $row["sexo"] . "<br>";
    }
} else {
    echo "0 resultados";
}
?>