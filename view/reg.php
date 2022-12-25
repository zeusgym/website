
<?php
include_once('../controll/conexion.php');
?>
<html >
<head>    
    <link rel="stylesheet" href="../view/assets/etilos.css ">
    <title>Document</title>
</head>
<body>
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
