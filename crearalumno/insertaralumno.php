<?php

require_once '../model/connection.php';
try {

    $query = "INSERT INTO tbl_alumnos (nombre,apellido1,apellido2,grupo,email,passwd) VALUES (?,?,?,?,?,?)";
    $sentencia=$pdo->prepare($query);
   
    $nombre=$_POST['nombre']; 
    $apellido1=$_POST['apellido1'];
    $apellido2=$_POST['apellido2'];
    $grupo=$_POST['grupo'];
    $email=$_POST['email'];
    $passwd=$_POST['passwd']; 
        
        $sentencia->bindParam(1,$nombre);
        $sentencia->bindParam(2,$apellido1);
        $sentencia->bindParam(3,$apellido2);
        $sentencia->bindParam(4,$grupo);
        $sentencia->bindParam(5,$email);
        $sentencia->bindParam(6,$passwd);
        $sentencia->execute();

        header ('Location:../table.php');

} catch (Exception $ex) {
    /* Reconocer un error y no hacer los cambios */
    echo $ex->getMessage();
   
}
?>