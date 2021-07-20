
 <head>
<link rel='stylesheet' type='text/css' href='styles.css'>
</head>
<ul>
<li><a href="index.php" title="Home page">Inicio</a></li>
 <li><a href="EliminarUsuario.php" title="Delete">Eliminar </a></li>
 <li><a href="AnadirUsuario.php" title="Create">Añadir</a></li>
 <li><a href="inicio.php" title="Images">BD</a></li>
 <li id="title">Empleados</li>
</ul>

<h1 align="center" style="color:white"> Registro de Empleados </h1>

<div align="center">
<?php


include ("conexion.php");
mysqli_set_charset($conexion,'utf8');

$conexion = new mysqli ('localhost', 'root', 'Luis2139331.','employees');

//consulta en sql

$consulta_sql = "SELECT * FROM employees WHERE emp_no >= 490000";


//mandar el query, y vamos a usar una conexion
$resultado = $conexion->query($consulta_sql);

//Retorna el numero de filas del resultado. Si encuentra mas de uno lo usamos para imprimir el resultado
$count = mysqli_num_rows($resultado);

/*
echo "<head>";
echo "<link rel='stylesheet' type='text/css' href='styles.css'>";
echo "</head>";
echo "<ul>";
echo "<li><a href='default.asp'>Home</a></li>";
echo "<li><a href='news.asp'>News</a></li>";
echo "<li><a href='contact.asp'>Contact</a></li>";
echo "<li><a href='about.asp'>About</a></li>";
echo "</ul>";
echo "<br>";
*/



//creacion de columnas
echo "<table border='2px'>";
echo "<tr>";
echo "<th>Numero de Empleado</th>";
echo "<th>Fecha de nacimiento</th>";
echo "<th>Nombre</th>";
echo "<th>Apellido</th>";
echo "<th>Genero</th>";
echo "<th>Fecha de Contratación</th>";
echo "</tr>";

if ($count > 0) {
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td>" . $row['emp_no'] . "</td>";
        echo "<td>" . $row['birth_date'] . "</td>";
        echo "<td>" . $row['first_name'] . "</td>";
        echo "<td>" . $row['last_name'] . "</td>";
        echo "<td>" . $row['gender'] . "</td>";
        echo "<td>" . $row['hire_date'] . "</td>";


        echo "<tr>";
    }
    echo "</table> ";
} else { // si no encuentra ningun registro
    echo "<h2 align='center'>Sin Registros</h2>";
}




?>

</div>