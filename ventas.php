<?php include 'header.php';?>

              
<?php
include('ajax/database.php');
$sql = 'SELECT idVenta, nombreZona, nombreModelo, nombre, apellido, precio, fechahora, cliente, nombreMetodo from ventas
        join zonas on ventas.idZona = zonas.idZona
        join modelos on ventas.idModelo = modelos.idModelo 
        join usuarios on ventas.idUsuario = usuarios.idUsuario 
        join metodopago on ventas.metodopago = metodopago.idMetodo';
$result = $conn->query($sql);
?>
   

                         <div class="row ">
                                <div class="col-lg-12">
                                    <button class="btn btn-success" id="botonexcel">Exportar a Excel</button>
                                    <button class="btn btn-primary" id="botontxt">Exportar a texto</button>
                                    <button class="btn btn-warning" id="botoncsv">Exportar a csv</button>
                                    <br>
                                    <br>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                            <div class="table-responsive table-responsive-data2">
                                    <table id="ventas" class="table table-data2">
                                        <thead>
                                            <tr>
                                            <strong class="card-title">
                                                <th>Fecha y Hora</th></strong> 
                                                <th>Modelo</th>
                                                <th >Precio</th>
                                                <th>Cliente</th>
                                                <th>Vendedor</th>
                                                <th>Zona</th>
                                                <th>Metodo de pago</th>
                                                </strong> 
                                            </tr>
                                        </thead>
                                         
                                        <tbody>
                                            <?php
                                            while($venta = $result->fetch_assoc())
                                            {
                                                ?>
                                            <tr>
                                                
                                                <td><?php echo $venta['fechahora']; ?></td>
                                                <td><?php echo $venta['nombreModelo']; ?></td>
                                                <td>$<?php echo $venta['precio']; ?></td>
                                                <td><?php echo $venta['cliente']; ?></td>
                                                <td><?php echo $venta['nombre'].' '.$venta['apellido'];; ?></td>
                                                <td><?php echo $venta['nombreZona']; ?></td>
                                                <td><?php echo $venta['nombreMetodo']; ?></td>

                                            </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                           
                                </div>
                               
                             </div>
                            </div>

<script src="js/xlsx.core.min.js"></script>
<script src="js/Blob.min.js"></script>
<script src="js/FileSaver.min.js"></script>
<script src="js/tableexport.min.js"></script>
<script>

    var tableId = 'ventas';
    var ExportButtons = document.getElementById(tableId);

    var instance = new TableExport(ExportButtons, {
        formats: ['xls', 'csv','txt'],
        exportButtons: false
    });
    // **** jQuery **************************
    //    $(ExportButtons).tableExport({
    //        formats: ['xls'],
    //        exportButtons: false
    //    });
    // **************************************

    var XLS = instance.CONSTANTS.FORMAT.XLS;
    var CSV = instance.CONSTANTS.FORMAT.CSV;
    var TXT = instance.CONSTANTS.FORMAT.TXT;
    //                                          // "id"  // format
    var exportDataXLS = instance.getExportData()[tableId][XLS];
    var exportDataCSV = instance.getExportData()[tableId][CSV];
    var exportDataTXT = instance.getExportData()[tableId][TXT];
    // get filesize
    var bytesXLS = instance.getFileSize(exportDataXLS.data, exportDataXLS.fileExtension);
    var bytesCSV = instance.getFileSize(exportDataCSV.data, exportDataCSV.fileExtension);
    var bytesTXT = instance.getFileSize(exportDataTXT.data, exportDataTXT.fileExtension);

    console.log('filesize (XLS):', bytesXLS + 'B');
    console.log('filesize (CSV):', bytesCSV + 'B');
    console.log('filesize (TXT):', bytesTXT + 'B');

    var XLSbutton = document.getElementById('botonexcel');
    XLSbutton.addEventListener('click', function (e) {
        //                   // data             // mime                 // name                 // extension
        instance.export2file(exportDataXLS.data, exportDataXLS.mimeType, exportDataXLS.filename, exportDataXLS.fileExtension);
    });

    var CSVbutton = document.getElementById('botoncsv');
    CSVbutton.addEventListener('click', function (e) {
        //                   // data             // mime                 // name                 // extension
        instance.export2file(exportDataCSV.data, exportDataCSV.mimeType, exportDataCSV.filename, exportDataCSV.fileExtension);
    });

    var TXTbutton = document.getElementById('botontxt');
    TXTbutton.addEventListener('click', function (e) {
        //                   // data             // mime                 // name                 // extension
        instance.export2file(exportDataTXT.data, exportDataTXT.mimeType, exportDataTXT.filename, exportDataTXT.fileExtension);
    });

</script>

<?php include 'footer.php'; ?>