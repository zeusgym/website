<?php
include_once('../controll/conexion.php');
error_reporting((0));
session_start();


if(isset($_SESSION["usuario"]));
{
    header("Location:../controll/panel.php");
}

if(isset($_POST["send"])){
    $user=$_POST["usuario"];
    $password= md5($_POST["contrasena"]);
    $cpassword=md5($_POST["ccontrasena"]);
    $correo=$_POST["email"];

    if($password==$cpassword){
        $sql="SELECT * FROM apicliente WHERE email='$correo'";
        $result=mysqli_query($conectar, $sql);
        if(!$result->num_rows > 0){
             
            $conectar=conn();
            $sql="INSERT INTO apicliente (usuario,contrasena,ccontrasena,email) VALUE ('$user','$password','$cpassword','$correo')";
            $result=mysqli_query($conectar,$sql);

            if($result){
                echo"<script>alert('Usuario registrado con exito')</script>";

                $user="";
                $_POST["contrasena"]="";
                $_POST["ccontrasena"]="";
                $correo="";

           }else{
                echo"<script>alert('Hay un error')</script>";
           }
             
        }else{
            echo"<script>alert('El correo ya existe')</script>";
        }
    }else{
        echo"<script>alert('Las contraseñas no coinciden')</script>";
    }
}
