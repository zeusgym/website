<?php
include_once('../controll/conexion.php');
session_start();
session_destroy();

header("Location: http://localhost:8080/pokemonapi/controll/loginse.php");
?>