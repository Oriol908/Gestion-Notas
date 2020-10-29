<?php

include '../model/userDao.php';
$myuserdao=new UserDao();
$myuserdao->eliminarUsuario($_GET['id']);
header ('Location:../table.php');

?>