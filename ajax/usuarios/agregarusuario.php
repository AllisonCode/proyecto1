<?php
include("../database.php");
$id=1;
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$sexo = $_POST["sexo"];
$username = $_POST["username"];
$password=  $_POST["pass"];
$zona=  $_POST["zona"];
$rol=  $_POST["rol"];
$email=  $_POST["email"];
$direccion=  $_POST["direccion"];
$telefono=  $_POST["telefono"];
$fechanacimiento= $_POST["fechanacimiento"];
$pass= md5($password);
$pass= md5($password);
$sql = "INSERT INTO usuarios VALUES(NULL, '$username', '$pass', '$zona','$rol','$nombre','$apellido','$email','$direccion','$telefono','$fechanacimiento','$sexo');";
echo $sql;
mysqli_query($conn, $sql);
mysqli_close($conn);
?>