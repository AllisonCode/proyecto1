<?php include 'header.php';
include("conexion.php");
$consulta = consulta();
?>
<div class="main-content">

                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row ">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Numero Venta</th>
                                                <th>Zona</th>
                                                <th>Modelo</th>
                                                <th class="text-right">Nombre</th>
                                                <th class="text-right">Apellido</th>
                                                <th class="text-right">Precio</th>
                                                <th class="text-right">Fecha</th>
                                                <th class="text-right">Cliente</th>
                                                <th class="text-right">Metodo de pago</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while($venta = $consulta->fetch_assoc())
                                            {
                                                ?>
                                            <tr>
                                                <td><?php echo $venta['idVenta']; ?></td>
                                                <td><?php echo $venta['nombreZona']; ?></td>
                                                <td><?php echo $venta['nombreModelo']; ?></td>
                                                <td><?php echo $venta['nombre']; ?></td>
                                                <td><?php echo $venta['apellido']; ?></td>
                                                <td>$<?php echo  $venta['precio']; ?></td>
                                                <td><?php echo $venta['fechahora']; ?></td>
                                                <td><?php echo $venta['cliente']; ?></td>
                                                <td><?php echo $venta['nombreMetodo']; ?></td>

                                            </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    
                                </div>
                                <table></table>
                            </div>
                          
                       
                           
<?php include 'footer.php'; ?>