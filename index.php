<?php
include 'header.php';?>
 <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Reportes</h2>
                                   
                                </div>
                            </div>
                        </div>
						<form method="get">
						<?php
						if(!isset($_GET['inicio']) AND !isset($_GET['final'])){
						?>
						<div class="row">
						Elegir rango de fecha:
						<div class="col-sm-6 col-lg-3">
						
						Inicio: <input type="date" id="inicio" name="inicio" class="form-control" onchange="validarfecha()" value="<?php echo date('Y-m-d'); ?>">
						</div>
						<div class="col-sm-6 col-lg-3">
						Final: <input type="date" id="final" name="final" class="form-control" onchange="validarfecha()" value="<?php echo date('Y-m-d'); ?>">
						</div>
						<?php }else{?>
						<div class="row">
						Elegir rango de fecha:
						<div class="col-sm-6 col-lg-3">
						
						Inicio: <input type="date" id="inicio" name="inicio" class="form-control" onchange="validarfecha()" value="<?php echo $_GET['inicio']; ?>">
						</div>
						<div class="col-sm-6 col-lg-3">
						Final: <input type="date" id="final" name="final" class="form-control" onchange="validarfecha()" value="<?php echo $_GET['final']; ?>">
						</div>
						<?php }?>
						<div>
						<br>
						 <button class="au-btn au-btn--blue" type="submit">
                                        <i class="zmdi zmdi-calendar"></i>Filtrar</button>
						</div>
						</div>
						</form>
                        <div class="row m-t-25">
						
                            <div class="col-sm-6 col-lg-3">
							
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-car"></i>
                                            </div>
                                            <div class="text">

											<?php 
include("ajax/database.php");
if(!isset($_GET['inicio']) AND !isset($_GET['final'])){
$fecha= date('Y-m-d');
$sql = "SELECT COUNT(*) FROM ventas WHERE fechahora BETWEEN '".$fecha." 00:00:00' AND '".$fecha." 23:59:59'";

	
}else{
$sql = "SELECT COUNT(*) FROM ventas WHERE fechahora BETWEEN '".$_GET['inicio']." 00:00:00' AND '".$_GET['final']." 23:59:59'";
}

$result = $conn->query($sql);
$row = $result->fetch_assoc();
$cantidadventas= $row['COUNT(*)'];
echo '<h2>'.$cantidadventas.'</h2>';

?>
                                                
                                               
                                            </div>
                                        </div>
                                        <div>
<span style="color:#f3f2f2;">Carro(s) vendidos</span><br><br><br>
                                        </div>
										<div class="overview-chart"> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
											
											<?php
if(!isset($_GET['inicio']) AND !isset($_GET['final'])){
$sql = "SELECT idModelo FROM ventas WHERE fechahora BETWEEN '".$fecha." 00:00:00' AND '".$fecha." 23:59:59'";

	
}else{
$sql = "SELECT idModelo FROM ventas WHERE fechahora BETWEEN '".$_GET['inicio']." 00:00:00' AND '".$_GET['final']." 23:59:59'";
}

$result = $conn->query($sql);
$carros = array();
if ($result->num_rows > 0) {	
while($row = $result->fetch_assoc()) {
$carros[]=$row['idModelo'];
}
$cuenta = array_count_values($carros);
arsort($cuenta);
$masvendido= key($cuenta);
$sql2= "SELECT nombreMarca,nombreModelo FROM modelos join marcas on modelos.idMarca=marcas.idMarca WHERE idModelo=".$masvendido;
$result2 = $conn->query($sql2);
$row2 = $result2->fetch_assoc();
echo '<h3 style="color:white;">'.strtoupper($row2['nombreMarca']).' '.strtoupper($row2['nombreModelo']).'</h3>';
}else{
	echo '<h3 style="color:white;">-</h3>';
}
											?>
                                                
															
                                            </div>
                                        </div>
                                        <div class="overview-chart">
<span style="color:#f3f2f2;"> Carro más vendido</span><br><br>	
                                        </div>
										<br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account"></i>
                                            </div>
                                            <div class="text">
<?php
if(!isset($_GET['inicio']) AND !isset($_GET['final'])){
$sql = "SELECT idUsuario FROM ventas WHERE fechahora BETWEEN '".$fecha." 00:00:00' AND '".$fecha." 23:59:59'";

	
}else{
$sql = "SELECT idUsuario FROM ventas WHERE fechahora BETWEEN '".$_GET['inicio']." 00:00:00' AND '".$_GET['final']." 23:59:59'";
}

$result = $conn->query($sql);
$users = array();
if ($result->num_rows > 0) {	
while($row = $result->fetch_assoc()) {
$users[]=$row['idUsuario'];
}
$cuenta = array_count_values($users);
arsort($cuenta);
$mejorvendedor= key($cuenta);
$sql2= "SELECT nombre,apellido FROM usuarios WHERE idUsuario=".$mejorvendedor;
$result2 = $conn->query($sql2);
$row2 = $result2->fetch_assoc();
echo '<h2>'.strtoupper($row2['nombre']).' '.strtoupper($row2['apellido']).'</h2>';
}else{
	echo '<h2 style="color:white;">-</h2>';
}
											?>
                                                
                                            </div>
                                        </div>
                                        <div class="overview-chart">
										<span style="color:#f3f2f2;">Mejor vendedor</span> <br>
										<?php
if(isset($mejorvendedor)){
if(!isset($_GET['inicio']) AND !isset($_GET['final'])){
$sql = "SELECT COUNT(*) FROM ventas WHERE idUsuario=".$mejorvendedor." AND fechahora BETWEEN '".$fecha." 00:00:00' AND '".$fecha." 23:59:59'";

	
}else{
$sql = "SELECT COUNT(*) FROM ventas WHERE idUsuario=".$mejorvendedor." AND fechahora BETWEEN '".$_GET['inicio']." 00:00:00' AND '".$_GET['final']." 23:59:59'";
}

$result = $conn->query($sql);
if ($result->num_rows > 0) {
$row = $result->fetch_assoc();
$ventas= $row['COUNT(*)'];
echo '<span style="color:white;">'.$ventas.' venta(s) realizadas</span>';
}else{
	echo '<span style="color:white;">0 venta(s) realizadas</span>';
}
}

											?>
                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <div class="text">
											<?php
if(!isset($_GET['inicio']) AND !isset($_GET['final'])){
$sql = "SELECT precio FROM ventas WHERE fechahora BETWEEN '".$fecha." 00:00:00' AND '".$fecha." 23:59:59'";

	
}else{
$sql = "SELECT precio FROM ventas WHERE fechahora BETWEEN '".$_GET['inicio']." 00:00:00' AND '".$_GET['final']." 23:59:59'";
}

$result = $conn->query($sql);
$ganancias = 0;
if ($result->num_rows > 0) {	
while($row = $result->fetch_assoc()) {
$ganancias+=floatval($row['precio']);
}
echo '<h2>$'.$ganancias.'</h2>';
}else{
	echo '<h2>$0</h2>';
}
											?>
                                                
                                                <span style="color:#f3f2f2;">Ganancias totales</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">Reporte de vendedores</h3>
                                        <div class="chart-info">
                                            <div class="chart-info__left">
                                               
                                            </div>
                                            <div class="chart-info__right">
                                               
                                            </div>
                                        </div>
                                        <div class="recent-report__chart">
                                           <canvas id="singelBarChart" height="584" width="1168" class="chartjs-render-monitor" style="display: block; width: 100%; height: 292px;"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                            </div>
                        </div>



<?php
include 'footer.php';
?>
<?php
$sql= "SELECT nombre,apellido,idUsuario FROM usuarios WHERE rol=2";
$result = $conn->query($sql);
$usuarios = array();
$idusuarios = array();
$totalventas = array();
if ($result->num_rows > 0) {	
while($row = $result->fetch_assoc()) {
$usuarios[]=$row['nombre'].' '.$row['apellido'];
$idusuarios[]=$row['idUsuario'];
}
}

if(!isset($_GET['inicio']) AND !isset($_GET['final'])){
	for($i=0;$i<=count($idusuarios)-1;$i++){
$sql2 = "SELECT precio FROM ventas WHERE idUsuario=".$idusuarios[$i]." AND fechahora BETWEEN '".$fecha." 00:00:00' AND '".$fecha." 23:59:59'";
$result2 = $conn->query($sql2);
if ($result2->num_rows > 0) {	
while($row2 = $result2->fetch_assoc()) {
	$totalventas[] += floatval($row2['precio']);
}
}else{
$totalventas[] = 0;
}
	}
}else{
for($i=0;$i<=count($idusuarios)-1;$i++){
$sql2 = "SELECT precio FROM ventas WHERE idUsuario=".$idusuarios[$i]." AND fechahora BETWEEN '".$_GET['inicio']." 00:00:00' AND '".$_GET['final']." 23:59:59'";
$result2 = $conn->query($sql2);
if ($result2->num_rows > 0) {	

while($row2 = $result2->fetch_assoc()) {
	$totalventas[] += floatval($row2['precio']);
}
}else{
$totalventas[] = 0;
}
	}
}

											?>
											
									<script>
						(function ($) {
  // USE STRICT
  "use strict";
  try {

    // single bar chart
    var ctx = document.getElementById("singelBarChart");
    if (ctx) {
      ctx.height = 150;
	  var nombres =<?php echo json_encode($usuarios);?>;
	  var ventas =<?php echo json_encode($totalventas);?>;
      var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: nombres,
          datasets: [
            {
              label: "Ventas",
              data: ventas,
              borderColor: "rgba(0, 123, 255, 0.9)",
              borderWidth: "0",
              backgroundColor: "rgba(0, 123, 255, 0.5)"
            }
          ]
        },
        options: {
          legend: {
            position: 'top',
            labels: {
              fontFamily: 'Poppins'
            }

          },
          scales: {
            xAxes: [{
              ticks: {
                fontFamily: "Poppins"

              }
            }],
            yAxes: [{
              ticks: {
                beginAtZero: true,
                fontFamily: "Poppins"
              }
            }]
          }
        }
      });
    }

  } catch (error) {
    console.log(error);
  }

})(jQuery);
						</script>