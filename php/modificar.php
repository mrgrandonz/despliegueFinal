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
    echo "<h1>BASES DE DATOS / Modificar</h1>";
    require_once('config.php');
    $dbname = "bdphp1";

    // Create connection 
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection 
    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }
    $query = "UPDATE clientes SET apellido='Grandon' WHERE id=1";
    $resultado = mysqli_query($conn, $query);

    if ($resultado === TRUE) {
        echo "<h3 class='alerta'>Registro modificado</h3>";
    } else {
        echo "<div class='alerta'>Error: " . $conn->error . "</div>";
    }

    $conn->close();

    ?>
</body>

</html>