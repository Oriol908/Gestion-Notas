<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Table Style</title>
    <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
<div class="table-title"> <br><br>
<h3>Usuarios</h3> <br> 
<td><a href="crearalumno/crearalumno.php"><button class="button">Crer alumno<a></td>
</div>
<br>
<?php 

include 'model/userDao.php';
$myuserdao=new UserDao();
$listausuarios=$myuserdao->getlistaUsuarios();


echo "<table style='padding:40px';>";

echo "<tr>";
echo "<th >Nombre</th>";
echo "<th >1r Apellido</th>";
echo "<th >2o Apellido</th>";
echo "<th >Grupo</th>";
echo "<th >Email</th>";
echo "<th >Actualizar</th>";
echo "<th >Eliminar</th>";
echo "</tr>";

foreach($listausuarios as $usuario){
    echo "<tr>";
    echo "<td>{$usuario['nombre']}</td>";
    echo "<td>{$usuario['apellido1']}</td>";
    echo "<td>{$usuario['apellido2']}</td>";
    echo "<td>{$usuario['grupo']}</td>";
    echo "<td>{$usuario['email']}</td>";
    echo "<td><a href='opciones/actualizar.php?id={$usuario['id_alumno']}'>Actualizar<a></td>";
    echo "<td><a href='opciones/eliminar.php?id={$usuario['id_alumno']}'>Eliminar<a></td>";
    echo "</tr>";
}

?>
</table>
</tbody>
</table> 
<div style="padding:10%">
<form action="table.php" method="POST">
    <label for="nombre">Nombre del alumno:</label>
    <input type="text" name="nombre" placeholder="Nombre..."><br><br>
    <label for="apep">1r apellido del alumno:</label>
    <input type="text" name="apellido1" placeholder="Apellido..."></br></br>
    <input type="submit" value="Filtrar" name="filtrar">
  </form>
</div>

<?php
    if (empty($_POST['filtrar'])){
		$listausu=new userDao();
	} else if (isset($_POST['nombre']) || isset($_POST['apellido1'])){
        $filtro_alu=new userDao();
        $filtro_alu->filtro();
    }
?>

</body>