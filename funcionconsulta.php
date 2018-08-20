<?php
function consulta(){

        global $conexion, $consulta;
        $sql = 'SELECT idVenta, nombreZona, nombreModelo, nombre, apellido, precio, fechahora, cliente, nombreMetodo from ventas
        join zonas on ventas.idZona = zonas.idZona
        join modelos on ventas.idModelo = modelos.idModelo 
        join usuarios on ventas.idUsuario = usuarios.idUsuario 
        join metodopago on ventas.metodopago = metodopago.idMetodo';
        return $conexion-> query($sql);
    }
?.