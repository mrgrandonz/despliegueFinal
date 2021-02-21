<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aniadir</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php
    echo "<h1>BASES DE DATOS / Añadir</h1>";
    require_once('config.php');
    $dbname = "bdphp1";

  
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }
    $query = "insert into clientes(nombre,apellido,email) values ('nombre','apellido','email')";
    $resultado = mysqli_query($conn, $query);

    if ($resultado === TRUE) {
        echo "<h3 class='alerta'>Registro creado correctamente.</h3>";
    } else {
        echo "<div class='alerta'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }

    $conn->close();
    
    ?>
</body>

</html>