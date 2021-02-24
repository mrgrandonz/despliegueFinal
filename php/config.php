<?php

//Archivo de configuración de la conexión a la base de datos
//Debemos modificar los datos a continuación para establecer la conexión de forma correcta
$servername = "localhost";
    $username = "root";
    $password = "root";

    // Crea la conexión a la base de datos con los datos aportados anteriormente
    $conn = mysqli_connect($servername, $username, $password);

    // Verifica la conexión. 
    if (!$conn) {
        die("Conexión fallida " . mysqli_connect_error());
    }
?>    