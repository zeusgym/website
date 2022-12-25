<?php
function conn(){
    $hostname = "localhost";
    $usuariodb = "root";
    $passworddb = "";
    $dbname = "pokemon";   
    
    

    // Generando la conexion con el sservidor
    $conectar= mysqli_connect($hostname, $usuariodb, $passworddb, $dbname);
    return $conectar;
    
}
// echo "Connected successfully";
 ?>                   