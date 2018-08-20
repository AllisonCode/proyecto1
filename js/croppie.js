// Start upload preview image
$(".gambar").attr("src", "http://erssolucoes.com.br/profile_male.jpg");
var $uploadCrop,
tempFilename,
rawImg,
imageId;
function readFile(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();
		reader.onload = function (e) {
			$('.upload-demo').addClass('ready');
		if(parent.document.getElementById('valoriframe').value=="agregar"){
			parent.document.getElementById('frameavatar2').height="700px";
		}else{
			parent.document.getElementById('frameavatar').height="700px";
		}
			$('#cropImagePop').modal('show');
			rawImg = e.target.result;
		}
		reader.readAsDataURL(input.files[0]);
	}
	else {
		swal("Desculpe, seu navegador não suporta o FileReader API.");
	}
}

$uploadCrop = $('#upload-demo').croppie({
	viewport: {
		width: 100,
		height: 100,
	},
	enforceBoundary: false,
	enableExif: true
});
$('#cropImagePop').on('shown.bs.modal', function(){
							// alert('Shown pop');
							$uploadCrop.croppie('bind', {
								url: rawImg
							}).then(function(){
								console.log('jQuery bind complete');
							});
						});

$('.item-img').on('change', function () { imageId = $(this).data('id'); tempFilename = $(this).val();
	$('#cancelCropBtn').data('id', imageId); readFile(this); });
$('#cropImageBtn').on('click', function (ev) {
	$uploadCrop.croppie('result', {
		type: 'base64',
		format: 'jpeg',
		size: {width: 100, height: 100}
	}).then(function (resp) {
		$('#item-img-output').attr('src', resp);
		$('#cropImagePop').modal('hide');
	if(document.getElementById('nombreimagen').value=='unnameduser'){
		html = '<img src="' + resp + '" />';
		$("#upload-image-i").html(html);
		$('#cropImagePop').modal('hide');
if(parent.document.getElementById('valoriframe').value=="agregar"){
			parent.document.getElementById('frameavatar2').height="100px";
		}else{
			parent.document.getElementById('frameavatar').height="100px";
		}
	parent.document.getElementById('imagennuevousuario').value=resp;
	}else{	
$.ajax({
	url: "croppie.php",
	type: "POST",
	data: {"image":resp, "nombre": document.getElementById('nombreimagen').value},
	success: function (data) {
		html = '<img src="' + resp + '" />';
		$("#upload-image-i").html(html);
		$('#cropImagePop').modal('hide');
if(parent.document.getElementById('valoriframe').value=="agregar"){
			parent.document.getElementById('frameavatar2').height="100px";
		}else{
			parent.document.getElementById('frameavatar').height="100px";
		}
	}
	})};
$('#cropImagePop').modal('hide');
});
});
				// End upload preview image