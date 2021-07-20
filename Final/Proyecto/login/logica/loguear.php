<?php 

    require "conexion.php";
    session_start();
    $no_cuenta = $_POST['no_cuenta'];
    $clave = $_POST['clave'];

    $consulta = "SELECT COUNT(*) AS contar FROM persona WHERE emp_no= '$no_cuenta' AND first_name = '$clave'";
    $mandarConsulta = mysqli_query($conexion, $consulta);

    $array = mysqli_fetch_array($mandarConsulta);

    if($array['contar']>0){
        $_SESSION['userNumeroDeCuenta'] = $no_cuenta;
        header("location:  ../Principal.php");
    }
    else{
        echo"Datos incorrectos";
    }

?>