<?php
session_start();
$usuario=$_POST['username'];
$contrasena=$_POST['password'];

$contra = md5 ($contrasena);
include("conexion.php");

$proceso = $conexion->query("SELECT * FROM usuarios WHERE username='$usuario' AND password='$contra' ");
    
    if($resultado = mysqli_fetch_array($proceso)){
        $_SESSION['u_usuario'] = $usuario;
        //$_SESSION['u_correo']
       header("Location:inicio");
      
    }
    else{
        header("Location:login");
        
    }
?>