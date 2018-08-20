<?php
session_start();
$usuario=$_POST['username'];
$contrasena=$_POST['password'];

$contra = md5 ($contrasena);
include("ajax/database.php");

$proceso = $conn->query("SELECT * FROM usuarios WHERE username='$usuario' AND password='$contra' ");
    
    if($resultado = mysqli_fetch_array($proceso)){
        $_SESSION['u_usuario'] = $usuario;
        $_SESSION['u_correo'] = $resultado['email'];
		$_SESSION['u_nombre'] = $resultado['nombre'].' '.$resultado['apellido'];
		$_SESSION['u_rol'] = $resultado['rol'];
       header("Location:inicio");
      
    }
    else{
        header("Location:login");
        
    }
?>