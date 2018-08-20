<?php
include 'header.php';
?>
<div  id="uno" style="" >
                                <div class="card">
                                    <div class="card-header"></div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Agregar Nueva Zona</h3>
                                        </div>
                                        <hr>

                                            <div class="form-group">
                                                <label for="name" class="control-label mb-1">Nombre</label>
                                                <input id="name" name="name" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                            </div>

                                            <div>
                                                <button id="ajax_insert" onclick="agregarzonas()" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-plus-circle"></i>&nbsp;
                                                    <span id="payment-button-amount">Agregar</span>

                                                </button>
                                            </div>

                                    </div>
                                </div>
                                <div id="insert_error"></div>
                        </div>

<?php
include 'footer.php';
?>
<script>
function agregarzonas(){
  var name= ($('#name').val()).trim();

  $.ajax({
    url:"ajax/Zonas/insert.php",
    type:"POST",
    data:({name:name}),
    cache:true,
    dataType:"text",
    success: onSuccess
  });

  $("#ajax_error").ajaxError(function(event,request,settings,exception){
  $("#ajax_error").html("Ha surgido un Error, No se pudo agregar la zona");
  });

  function onSuccess(data){
    $("#ajax_error").html("result:"+data);
  }
}
</script>