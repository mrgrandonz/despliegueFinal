<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar Todo</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php
    //Archivo que permite eliminar la base de datos completa
    echo "<h1>BASES DE DATOS / Borrar todo</h1>";

    //Obtenemos los datos del archivo de configuración
    require_once('config.php');
    $dbname = "bdphp1";

    //Se crea la conexión a la base de datos
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Verificamos la conexión
    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    //Sentencia que elimina la base datos
    $query = "DROP DATABASE bdphp1";
    $resultado = mysqli_query($conn, $query);

    //Crea mensajes de alerta, los cuales indican el éxito o fracaso de la operación
    if ($resultado === TRUE) {
        echo "<h3 class='alerta'>Base de Datos eliminada correctamente.</h3>";
    } else {
        echo "<div class='alerta'>Error: " . $conn->error . "</div>";
    }

    $conn->close();

    ?>
</body>

</html>