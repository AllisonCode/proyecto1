<?php
include("../database.php");
$id= $_POST["id"];
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

if(!empty($password)){
	$pass= md5($password);
	$sql = "UPDATE usuarios SET nombre='".$nombre."',apellido='".$apellido."',sexo='".$sexo."',username='".$username."',password='".$pass."',idZona='".$zona."',rol='".$rol."',direccion='".$direccion."',telefono='".$telefono."',fechanacimiento='".$fechanacimiento."',email='".$email."' WHERE idUsuario = '".$id."';";
}else{
		$sql = "UPDATE usuarios SET nombre='".$nombre."',apellido='".$apellido."',sexo='".$sexo."',username='".$username."',idZona='".$zona."',rol='".$rol."',direccion='".$direccion."',telefono='".$telefono."',fechanacimiento='".$fechanacimiento."',email='".$email."' WHERE idUsuario = '".$id."';";
}
mysqli_query($conn, $sql);
echo $sql;
mysqli_close($conn);
?>