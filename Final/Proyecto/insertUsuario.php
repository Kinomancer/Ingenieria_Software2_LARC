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

    <button onclick="window.location.href='AnadirUsuario.php';">
      Regresar
    </button>

</body>
</html>

<?php

    require "conexion.php";

    mysqli_set_charset($conexion, 'utf_8');


    $emp_no = $_POST['emp_no'];
    $birth_date = $_POST['birth_date'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $hire_date =$_POST['hire_date'];

    $conexion->query("INSERT INTO employees (emp_no,birth_date,first_name,last_name,gender,hire_date) VALUES ('$emp_no','$birth_date','$first_name','$last_name','$gender','$hire_date')") or
     die($mysqli->error);
   

    mysqli_close($conexion);

    echo "<h2>Se ha añadido al empleado</h2>";

?>