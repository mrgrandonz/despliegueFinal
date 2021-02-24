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
    //Archivo que permite modificar un registro de la tabla clientes
    echo "<h1>BASES DE DATOS / Modificar</h1>";

    //Obtenemos los datos del archivo de configuración
    require_once('config.php');
    $dbname = "bdphp1";

    // Crea la conexión con la base de datos
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Verifica la conexión
    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    //Sentencia que permite actualizar un cliente con id 1
    $query = "UPDATE clientes SET apellido='Grandon' WHERE id=1";
    $resultado = mysqli_query($conn, $query);

    //Crea mensajes de alerta, los cuales indican el éxito o fracaso de la operación
    if ($resultado === TRUE) {
        echo "<h3 class='alerta'>Registro modificado</h3>";
    } else {
        echo "<div class='alerta'>Error: " . $conn->error . "</div>";
    }

    $conn->close();

    ?>
</body>

</html>