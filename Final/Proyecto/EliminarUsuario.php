<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Usuario</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<nav id="menu">
 <ul>
 <li><a href="index.php" title="Home page">Inicio</a></li>
 <li><a href="EliminarUsuario.php" title="Delete">Eliminar </a></li>
 <li><a href="AnadirUsuario.php" title="Create">Añadir</a></li>
 <li><a href="inicio.php" title="Images">BD</a></li>
 <li id="title">Eliminar </li>
 </ul>
 </nav>    

 <h1 align="center" style="color:white" > Eliminación de empleado del registro </h1>

    <form align="right"; method="POST" action="deleteUsuario.php">
        <input type="text" name="no_cuenta" placeholder="Numero de Empleado">
        <br>
        <button type="submit">Eliminar empleado</button> 
    </form>

 <br>
 <br>
 <br>

    
</body>
</html>