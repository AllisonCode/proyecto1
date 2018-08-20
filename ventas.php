<?php include 'header.php';?>

                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
<?php include 'header.php';
include("conexion.php");
$consulta = consulta();
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
                                            while($venta = $consulta->fetch_assoc())
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
<<<<<<< HEAD
                            <div class="col-lg-3">
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
                        </div>
                        <div class="row">
                            <div class="col-lg-6">

=======
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