<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Croppie +PHP</title>
  
  
  
      <link rel="stylesheet" href="css/croppie.css">

  
</head>

<body>

  <html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Send Photo with PHP</title>

                  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>

<link rel='stylesheet prefetch' href='https://foliotek.github.io/Croppie/croppie.css'>

                <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
  

  </head>
<body>

  
              <div class="container">
                <div class="row">
                  <div class="col-xs-12" align="center">


<?php if(!isset($_GET['user'])){ ?> <input type="hidden" id="nombreimagen" value="<?php echo $_GET["img"];  ?>"/> <?php }else{ ?>
<input type="hidden" id="nombreimagen" value="unnameduser"/> <?php } ?>
                      <label class="cabinet center-block">
                        <figure>
<?php if(!isset($_GET['user'])){ ?> <img src="uploads/avatar_<?php echo $_GET["img"].'.jpg'; ?>"  id="item-img-output" height="100px" width="100px"/> <?php }else { ?>
                          <img src="uploads/default.jpg"  id="item-img-output" height="100px" width="100px" /> <?php } ?>
                          <figcaption><i class="fa fa-camera" align="center"></i></figcaption>
                        </figure>
                        <input type="file" class="item-img file center-block" name="file_photo"/>
                      </label>


                  </div>
                </div>
              </div>


              <div class="modal fade" id="cropImagePop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel"> </h4>
                    </div>
                    <div class="modal-body">
                      <div id="upload-demo" class="center-block"></div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                      <button type="button" id="cropImageBtn" class="btn btn-primary">Cortar</button>
                    </div>
                  </div>
                </div>
              </div>

  


  
  
  
                  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
                  <script src='https://foliotek.github.io/Croppie/croppie.js'></script>
  
                  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
  
  
  
  
</body>
</html>
  
      <script  src="js/croppie2.js"></script>

    <script  src="js/croppie.js"></script>




</body>

</html>