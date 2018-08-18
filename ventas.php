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
                                                <td><?php echo $venta['metodopago']; ?></td>

                                            </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        <!---    <div class="col-lg-3">
                                <div class="au-card au-card--bg-blue au-card-top-countries m-b-30">
                                    <div class="au-card-inner">
                                        <div class="table-responsive">
                                            <table class="table table-top-countries">
                                                <tbody>
                                                    <tr>
                                                        <td>United States</td>
                                                        <td class="text-right">$119,366.96</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Australia</td>
                                                        <td class="text-right">$70,261.65</td>
                                                    </tr>
                                                    <tr>
                                                        <td>United Kingdom</td>
                                                        <td class="text-right">$46,399.22</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Turkey</td>
                                                        <td class="text-right">$35,364.90</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Germany</td>
                                                        <td class="text-right">$20,366.96</td>
                                                    </tr>
                                                    <tr>
                                                        <td>France</td>
                                                        <td class="text-right">$10,366.96</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Australia</td>
                                                        <td class="text-right">$5,366.96</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Italy</td>
                                                        <td class="text-right">$1639.32</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --!>
                       
                           
<?php include 'footer.php'; ?>