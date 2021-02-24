<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php
    //Archivo que borra un registro de cliente de la tabla clientes
    echo "<h1>BASES DE DATOS / Borrar</h1>";

    //Con la linea a continuación, obtenemos los datos del archivo de configuración
    require_once('config.php');
    $dbname = "bdphp1";

    //Se crea la conexión a la base de datos
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Verifica la conexión 
    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    //Sentencia que elimina los datos de un cliente en la base de datos
    $query = "DELETE FROM clientes WHERE id=3";
    $resultado = mysqli_query($conn, $query);

    //Crea mensajes de alerta, los cuales indican el éxito o fracaso de la operación
    if ($resultado === TRUE) {
        echo "<h3 class='alerta'>Registro eliminado correctamente.</h3>";
    } else {
        echo "<div class='alerta'>Error: " . $conn->error . "</div>";
    }

    $conn->close();

    ?>
</body>

</html>