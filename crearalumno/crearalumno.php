<!DOCTYPE html>
<html>
<head>
<title>Usuarios</title>
<link rel="stylesheet" type="text/css" href="../css/styles2.css">
</head>

<form action="insertaralumno.php" method="POST" class = "contenedor--formulario">
  <h1>Crear usuario</h1>
  <input type="text" name="nombre" placeholder = "Nombre">
  <input type="text" name="apellido1" placeholder = "Apellido1">
  <input type="text" name="apellido2" placeholder = "Apellido2">
  <input type="text" name="grupo" placeholder = "Grupo">
  <input type="email" name="email" placeholder = "Correo">
  <input type="password" name="passwd" placeholder = "Contraseña">
  <button class = "btn">Enviar</button>
</form>

</body>
</html>