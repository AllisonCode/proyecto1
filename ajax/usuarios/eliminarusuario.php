<?php
include("../database.php");
$id= $_REQUEST["id"];
$sql = "DELETE FROM usuarios WHERE idUsuario='".$id."'";
mysqli_query($conn,$sql);
mysqli_close($conn);
?>