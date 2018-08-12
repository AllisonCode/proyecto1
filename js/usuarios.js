function listartodos() { 
document.getElementById("editar").setAttribute("style", "display: none;");
$.ajax({
	 url : "ajax/usuarios/mostrarusuarios.php",
	 cache:false,
	 dataType:"text",
	 success:onSuccess,
	 beforeSend: function() {document.getElementById("cargando").setAttribute("style", "");},
	 complete: function() {document.getElementById("cargando").setAttribute("style", "display: none;");}
	 });                
$("#listar").ajaxError(function(event,request,settings,exception){
 $("#listar").html("Error calling: "+ settings.url +"<br/>HTTP code:" + request.status);
  });
  function onSuccess (data)   {
	  document.getElementById("listar").setAttribute("style", "");
	  document.getElementById("editar").setAttribute("style", "display: none;");
	  document.getElementById("listar").innerHTML= data;}
};

function listarusuario(id) { 
document.getElementById("listar").setAttribute("style", "display: none;");
$.ajax({
	 type:"POST",
	 url : "ajax/usuarios/listarusuario.php",
	 data:({id: id}),
	 cache:false,
	 dataType:"text",
	 success:onSuccess
	 });                
$("#editar").ajaxError(function(event,request,settings,exception){
 $("#editar").html("Error calling: "+ settings.url +"<br/>HTTP code:" + request.status);
  });
  function onSuccess (data)   {
	  document.getElementById("editar").setAttribute("style", "");
	  document.getElementById("listar").setAttribute("style", "display: none;");
	  document.getElementById("editar").innerHTML= data;}
};
