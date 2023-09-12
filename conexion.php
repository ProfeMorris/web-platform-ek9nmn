<?php
$servername = "localhost";
$database = "priscila_colegio";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Conexion fallida: " . mysqli_connect_error());
}
echo "Conexion realizada";
mysqli_close($conn);
?>