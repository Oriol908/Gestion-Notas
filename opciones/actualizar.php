<!DOCTYPE html>
<html>
<head>
<title>Notas</title>
<link rel="stylesheet" type="text/css" href="../css/styles2.css">
</head>

<form action="modificarnota.php" method="POST" class = "contenedor--formulario">
  <h1>Notas</h1>
  <input type="hidden" name="id" placeholder = "Mates" value="<?php echo $_GET['id']?>">
  <input type="text" name="mates" placeholder = "Mates">
  <input type="text" name="fisica" placeholder = "Física">
  <input type="text" name="programacion" placeholder = "Programación">
  
  <button class = "btn">Enviar</button>
</form>

</body>
</html>