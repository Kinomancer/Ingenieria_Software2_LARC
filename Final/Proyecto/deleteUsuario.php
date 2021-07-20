<!doctype html>
<html>
<head>
 <meta charset="utf-8" />
 <title>Proyecto CRUD</title>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <br>
    <br>
    <br>

    <button onclick="window.location.href='EliminarUsuario.php';">
      Regresar
    </button>

</body>
</html>

<?php

    require "conexion.php";

    mysqli_set_charset($conexion, 'utf_8');

    $registroEliminado = $_POST['no_cuenta'];

    $consulta = "DELETE FROM employees where emp_no = ";

    mysqli_query($conexion, $consulta . $registroEliminado);
    mysqli_close($conexion);

    echo "<h2>Se ha eliminado el empleado</h2>";

?>