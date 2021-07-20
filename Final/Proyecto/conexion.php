<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion</title>
</head>
<body>

</body>
</html>


<?php
$host_db="127.0.0.1";//localhost
$user_db="root";
$pass_db="Luis2139331.";
$db_name="employees";

$conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);
if ($conexion){
    echo "<p align='center' style='color:blue'></p>";
}else {
    echo "<p align='center' style='color:blue'>Tienes un error de conexion :(</p>";
}


?>