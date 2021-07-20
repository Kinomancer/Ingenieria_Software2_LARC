<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Usuario</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
body {
  font-family: Arial;
}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=date] {
  width: 10%;
  background-color: white;
  color: black;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>
<nav id="menu">
 <ul>
 <li><a href="index.php" title="Home page">Inicio</a></li>
 <li><a href="EliminarUsuario.php" title="Delete">Eliminar </a></li>
 <li><a href="AnadirUsuario.php" title="Create">Añadir</a></li>
 <li><a href="inicio.php" title="Images">BD</a></li>
 <li id="title">Añadir </li>
 </ul>
 </nav>    

 <h1 align="center" style="color:white"> Registro de Nuevos Empleados </h1>
 

 <div class="container">
 <form action="insertUsuario.php" method="POST">
 
  <label for="emp_no">Numero de Empleado</label>
  <input type="text" name="emp_no" placeholder="Numero de Empleado..">

  <label for="birth_date">Fecha de nacimiento: </label>
  <input type="date" name="birth_date" placeholder="Fecha de nacimiento">
  <br>
  <label for="first_name">Nombre</label>
  <input type="text" id="fname" name="first_name" placeholder="Nombre..">

  <label for="last_name">Apellido</label>
  <input type="text" id="lname" name="last_name" placeholder="Apellido..">

  

  <label for="gender">Genero</label>
  <select id="gender" name="gender">
    <option value="M">Hombre</option>
    <option value="F">Mujer</option>
  </select>

  <label for="hire_date">Fecha de contrato: </label>

  <input type="date" name="hire_date" placeholder="Fecha de contrato">

  <input type="submit" value="Anadir">
</form>

</div>


 <br>
 <br>
 <br>

    
</body>
</html>