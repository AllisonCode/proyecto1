<?php 
    $conexion = new mysqli("localhost","root","usbw","allison_autosal");
    if ($conexion){
        echo "Conexion exitosa";
    }
  
    function consulta(){

        global $conexion, $consulta;
        $sql = 'SELECT *
         FROM ventas 
         ';
        return $conexion-> query($sql);
    }
//inner join zonas on ventas.idZona=zonas.idZona
//inner join modelos on ventas.idModelo=modelos.idModelos
//inner join usuarios on ventas.idUsuario=usuarios.idUsuario

?>