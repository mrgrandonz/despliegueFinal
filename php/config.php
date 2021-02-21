<?php
$servername = "localhost";
    $username = "root";
    $password = "root";

    // Create connection 
    $conn = mysqli_connect($servername, $username, $password);

    // Check connection 
    if (!$conn) {
        die("Conexión fallida " . mysqli_connect_error());
    }
?>    