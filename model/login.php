<?php
include '../clases/administrador.php';
include 'userDAO.php';
if (isset($_POST['email'])) {
    $user = new Administrador($_POST['email'], md5($_POST['passwd']));
    $userDAO = new UserDAO();
    if($userDAO->login($user)){
        header('Location: ../table.php');
      
    }else {
        header('Location: ../index.php');

    }
}else {
    header('Location: ../index.php');

}
?>