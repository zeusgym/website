<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./view/assets/etilos.css">
    <title>Pokemon API</title>
</head>

<body>



<?php
include_once('../controll/conexion.php');
?>

    <p class="text-xl">Test</p>
    <div class="contenedorb">
        <div class="imagenpokemon">
            <img src="../view/logo.png">       
        </div>
        <form action="../controll/registro.php" method="POST" class="register"> 
            

            <input type="text" name="usuario" class="datos" placeholder="Ingresa tu usuario">
            <input type="password" name="contrasena" class="datos" placeholder="Ingresa tu contraseña">
            <input type="password" name="ccontrasena" class="datos" placeholder="Repita su contraseña">
            <input type="email" name="email" class="datos" placeholder="Ingresa tu email">

            <input type="submit" name="send" class="crear" value="Registrar">  
        </div>  
    </form>     


</body>
</html>