<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php
    //Este archivo permite la creación de una nueva base de datos con el nombre "bdphp1"
    echo "<h1>BASES DE DATOS / Crear BBDD y Tabla</h1>";

    //Con la linea a continuación, obtenemos los datos del archivo de configuración
    require_once('config.php');

    //Sentencia que crea la base datos con los parámetros previamente definidos
    $sql = "CREATE DATABASE bdphp1";
    if (mysqli_query($conn, $sql)) {
        echo "<h3 class='alerta'>Base de datos creada correctamente</h3>";
        // Crea la conexión a la base datos, especificando el nombre de la misma
        $conn2 = mysqli_connect($servername, $username, $password, "bdphp1");
        // Verifica la conexión
        if (!$conn2) {
            die("Conexión2 fallida: " . mysqli_connect_error());
        }

        //Sentencia que crea la tabla "clientes"
        $sql = "CREATE TABLE Clientes (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(30) NOT NULL,
        apellido VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";

        //Crea mensajes de alerta, los cuales indican el éxito o fracaso de la operación
        if (mysqli_query($conn2, $sql)) {
            echo "<h3 class='alerta'>Tabla creada correctamente.</h3>";
        } else {
            echo "<div class='alerta'>Error al crear la tabla: " . mysqli_error($conn) . "</div>";
        }
    } else {
        echo "<div class='result'>Error al crear la base de datos: " . mysqli_error($conn) . "</div>";
    }

    mysqli_close($conn);
    ?>
</body>

</html>