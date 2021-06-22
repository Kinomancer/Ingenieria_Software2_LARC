<?php

    require "conexion.php";

    mysqli_set_charset($conexion, 'utf_8');

    $registroEliminado = $_POST['no_cuenta'];

    $consulta = "DELETE FROM employees where emp_no = ";

    mysqli_query($conexion, $consulta . $registroEliminado);
    mysqli_close($conexion);

    echo "<h2>Registro Eliminado</h2>";

?>