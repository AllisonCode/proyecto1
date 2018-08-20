<?php
include('../database.php');

$name = "prueba";


$sql = "INSERT INTO zonas VALUES (NULL,'$name');";
echo $sql;
mysqli_query($conn,$sql);
mysqli_close($conn);
?>