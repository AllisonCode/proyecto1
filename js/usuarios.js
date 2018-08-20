function listartodos() { 
document.getElementById("editar").setAttribute("style", "display: none;");
$.ajax({
	 url : "ajax/usuarios/mostrarusuarios.php",
	 cache:true,
	 dataType:"text",
	 success:onSuccess,
	 beforeSend: function() {document.getElementById("cargando").setAttribute("style", "");},
	 complete: function() {document.getElementById("cargando").setAttribute("style", "display: none;");}
	 });                
$("#listar").ajaxError(function(event,request,settings,exception){
 $("#listar").html("No se pudo cargar. Intentelo de nuevo más tarde.");
  });
  function onSuccess (data)   {
	  document.getElementById("listar").setAttribute("style", "");
	  document.getElementById("agregar").setAttribute("style", "display: none;");
	  document.getElementById("editar").setAttribute("style", "display: none;");
	  document.getElementById("listar").innerHTML= data;}
};

function listarusuario(id) { 
document.getElementById("listar").setAttribute("style", "display: none;");
$.ajax({
	 type:"POST",
	 url : "ajax/usuarios/listarusuario.php",
	 data:({id: id}),
	 cache:true,
	 dataType:"text",
	 success:onSuccess
	 });                
$("#editar").ajaxError(function(event,request,settings,exception){
 $("#editar").html("No se pudo cargar. Intentelo de nuevo más tarde.");
  });
  function onSuccess (data)   {
	  document.getElementById("valoriframe").value = "editar";
	  document.getElementById("editar").setAttribute("style", "");
	  document.getElementById("listar").setAttribute("style", "display: none;");
	  document.getElementById("editar").innerHTML= data;}
};

function actualizar() { 
var id= ($("#idusuario").val()).trim();
var nombre= ($("#nombre").val()).trim();
var apellido= ($("#apellido").val()).trim();
var email= ($("#email").val()).trim();
var telefono= ($("#telefono").val()).trim();
var direccion= ($("#direccion").val()).trim();
var fechanacimiento= $("#date").val();
var sexo= $("#sexo").val();
var rol= $("#rol").val();
var zona= $("#zona").val();
var username= ($("#username").val()).trim();
var pass= ($("#password").val()).trim();
$.ajax({
	 type:"POST",
	 url : "ajax/usuarios/actualizarusuario.php",
	 data:({id:id,nombre:nombre,apellido:apellido,email:email,telefono:telefono,direccion:direccion,fechanacimiento:fechanacimiento,sexo:sexo,rol:rol,zona:zona,username:username,pass:pass}),
	 cache:true,
	 dataType:"text",
	 success:onSuccess
	 }); 
$("#editar").ajaxError(function(event,request,settings,exception){
 $("#editar").html("No se pudo cargar. Intentelo de nuevo más tarde.");
  });
function onSuccess (data)   {
document.getElementById("editar").setAttribute("style", "display: none;");
listartodos();
document.getElementById("listar").setAttribute("style", "");	 
};
};

function agregarform() { 
document.getElementById("listar").setAttribute("style", "display: none;");
$.ajax({
	 url : "ajax/usuarios/agregar.php",
	 cache:true,
	 dataType:"text",
	 success:onSuccess,
	 beforeSend: function() {document.getElementById("cargando").setAttribute("style", "");},
	 complete: function() {document.getElementById("cargando").setAttribute("style", "display: none;");}
	 });                
$("#listar").ajaxError(function(event,request,settings,exception){
 $("#listar").html("No se pudo cargar. Intentelo de nuevo más tarde.");
  });
  function onSuccess (data)   {
	  document.getElementById("valoriframe").value = "agregar";
	  document.getElementById("agregar").setAttribute("style", "");
	  document.getElementById("listar").setAttribute("style", "display: none;");
	  document.getElementById("agregar").innerHTML= data;}
};

function agregarusuario() { 
var nombre= ($("#nombre2").val()).trim();
var apellido= ($("#apellido2").val()).trim();
var email= ($("#email2").val()).trim();
var telefono= ($("#telefono2").val()).trim();
var direccion= ($("#direccion2").val()).trim();
var fechanacimiento= $("#date2").val();
var sexo= $("#sexo2").val();
var rol= $("#rol2").val();
var zona= $("#zona2").val();
var username= ($("#username2").val()).trim();
var pass= ($("#password2").val()).trim();
var imagen= $("#imagennuevousuario").val();
$.ajax({
	url: "croppie.php",
	type: "POST",
	data: {"image":imagen, "nombre": username },
	success: function (data) {
	}
	});
$.ajax({
	 type:"POST",
	 url : "ajax/usuarios/agregarusuario.php",
	 data:({nombre:nombre,apellido:apellido,email:email,telefono:telefono,direccion:direccion,fechanacimiento:fechanacimiento,sexo:sexo,rol:rol,zona:zona,username:username,pass:pass}),
	 cache:true,
	 dataType:"text",
	 success:onSuccess
	 }); 
$("#agregar").ajaxError(function(event,request,settings,exception){
  $("#agregar").html("No se pudo cargar. Intentelo de nuevo más tarde.");
  });
function onSuccess (data)   {
document.getElementById("agregar").setAttribute("style", "display: none;");
listartodos();
document.getElementById("listar").setAttribute("style", "");	 
}
};

function eliminarusuario(id) { 
var r = confirm('¿Estas seguro que deseas eliminar el usuario?');
if(r==true){
$.ajax({
	 type:"POST",
	 url : "ajax/usuarios/eliminarusuario.php",
	 data:({id: id}),
	 cache:true,
	 dataType:"text",
	 success:onSuccess
});                
$("#editar").ajaxError(function(event,request,settings,exception){
 $("#editar").html("No se pudo cargar. Intentelo de nuevo más tarde.");
  });
  function onSuccess (data)   {
	  listartodos();
};}
}