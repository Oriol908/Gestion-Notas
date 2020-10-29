<?php

include '../model/userDao.php';
$id=$_POST['id'];
$mates=$_POST['mates'];
$fisica=$_POST['fisica'];
$programacion=$_POST['programacion'];
$myuserdao=new UserDao();
$myuserdao->modificarNota($id,$mates,$fisica,$programacion);
header ('Location:../table.php');

?>