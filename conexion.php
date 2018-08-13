<?php 
    $conexion = new mysqli("localhost","root","usbw","allison_autosal");
    if ($conexion){
        echo "Conexion exitosa";
    }
  
    function consulta(){

        global $conexion, $consulta;
        $sql = 'SELECT * FROM ventas';
        return $conexion-> query($sql);
    }


?>