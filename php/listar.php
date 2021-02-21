<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php
    echo "<h1>BASES DE DATOS / Listar</h1>";
    require_once('config.php');
    $dbname = "bdphp1";

    // Create connection 
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection 
    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }
    $query = "SELECT id, nombre, apellido, email FROM clientes";
    $resultado = mysqli_query($conn, $query);

    if ($resultado->num_rows > 0) {
        echo "<h3 class='alerta'>Resultados:</h3>";
        while ($row = $resultado->fetch_assoc()) {
            echo "<div class='alerta'>id: " . $row["id"] . " - Nombre: " . $row["nombre"] . " " . $row["apellido"] . "  "
            . "Email: " . $row["email"] .
            "</div>";
        }
    } else {
        echo "<div class='alerta'>0 resultados</div>";
    }

    $conn->close();

    ?>
</body>

</html>