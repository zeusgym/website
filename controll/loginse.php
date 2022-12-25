<?php
include_once('../controll/conexion.php');
session_start();
error_reporting(0);

if(isset($_SESSION["usuario"])){
    header("Location: ../controll/panel.php");
}

if(isset($_POST["login"])){
    $email=$_POST["email"];
    $password= md5($_POST["password"]);
    $conectar=conn();
    $sql="SELECT * FROM apicliente WHERE email='$correo' AND contrasena='$password'";
    $result=mysqli_query($conectar, $sql); 

    if($result->num_rows >0){
        $row=mysqli_fetch_assoc($result);
        $_SESSION['usuario'] = $row['usuario'];
        header("Location: panel.php");        
    }else{
        echo"<script>alert('La contraseña o el email son incorrectos')</script>";
    }
}