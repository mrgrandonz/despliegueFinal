<html>
<head>
  <title>Problema</title>
</head>
<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "mydb") or
    die("Problemas con la conexión");
    $name= $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email= $_POST['email'];
  mysqli_query($conexion, "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('$name','$lastname','$email')") or
    die("Problemas en el select" . mysqli_error($conexion));
  mysqli_close($conexion);
  echo "El alumno fue dado de alta.";
  ?>
</body>
</html>