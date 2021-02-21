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
    echo "<h1>BASES DE DATOS / Borrar todo</h1>";
    require_once('config.php');
    $dbname = "bdphp1";

    // Create connection 
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection 
    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }
    $query = "DROP DATABASE bdphp1";
    $resultado = mysqli_query($conn, $query);

    if ($resultado === TRUE) {
        echo "<h3 class='alerta'>Base de Datos eliminada correctamente.</h3>";
    } else {
        echo "<div class='alerta'>Error: " . $conn->error . "</div>";
    }

    $conn->close();

    ?>
</body>

</html>