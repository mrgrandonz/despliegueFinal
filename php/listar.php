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
    //Archivo que genera una lista de los clientes
    echo "<h1>BASES DE DATOS / Listar</h1>";

    //Obtenemos los datos del archivo de configuración
    require_once('config.php');
    $dbname = "bdphp1";

    // Crea la conexión con la base datos
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Verifica la conexión
    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    //Sentencia que permite seleccionar todos los registros de la tabla clientes
    $query = "SELECT id, nombre, apellido, email FROM clientes";
    $resultado = mysqli_query($conn, $query);

    //Lista todos los clientes de la tabla generando una vista de estos en el navegador. 
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