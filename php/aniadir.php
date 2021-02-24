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
    //Archivo que permite añadir un nuevo cliente a la tabla de "clientes"
    echo "<h1>BASES DE DATOS / Añadir</h1>";

    //Obtenemos los datos del archivo de configuración
    require_once('config.php');
    $dbname = "bdphp1";

    //Se crea la conexión a la base de datos
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Verifica la conexión. 
    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }
    //Sentencia que inserta los datos del nuevo cliente en la base de datos
    $query = "insert into clientes(nombre,apellido,email) values ('nombre','apellido','email')";
    $resultado = mysqli_query($conn, $query);


    //Crea mensajes de alerta, los cuales indican el éxito o fracaso de la operación
    if ($resultado === TRUE) {
        echo "<h3 class='alerta'>Registro creado correctamente.</h3>";
    } else {
        echo "<div class='alerta'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }

    $conn->close();

    ?>
</body>

</html>