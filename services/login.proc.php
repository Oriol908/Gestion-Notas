<?php
session_start();
if (!isset($_SESSION['email'])){
    header('Location:../index.php');    
}
echo '<h1>Bienvenido '.$_SESSION['email'].'</h1>';
echo '<a href="../services/logout.proc.php">Cerrar sesión</a>';
?>