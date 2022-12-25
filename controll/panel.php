<?php
include_once('../controll/conexion.php');
if(!isset($_SESSION["usuario"])){
    header("Location: ..controll/loginse.php");
}

?>
<h1>BIENVENIDO A SU CUENTA</h1><BR><br>
<a href="logout.php">Desconectar</a>