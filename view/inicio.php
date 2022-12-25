<?php
include_once('../controll/conexion.php');
?>

<html>
<head>    
    <link rel="stylesheet" href="./assets/etilos.css ">
    <title>Document</title>
</head>
<body>
    <div class="contenedorb">
        <div class="imagenpokemon">
            <img src="./logo.png">       
        </div>
        <form action="../controll/sesion.php" method="POST" class="register"> 

            <input type="text" name="usuario" class="datos" placeholder="Ingresa tu usuario">
            <input type="password" name="contrasena" class="datos" placeholder="Ingresa tu contraseña">
            <input type="submit" name="login" class="crear" >login</button>  
        </div>  
    </form>     

  
 
</body>
</html>