
<?php session_start(); ?>
<?php 

    if(!isset($_SESSION['u_usuario'])){
		header("Location:login");
	}else{
		if($_SESSION['u_rol']==2){
			header("Location:logout.php");
		}
    }
	    
    ?>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="AllisonCode">
    <meta name="keywords" content="au theme template">
<script>
function validarfecha(){
	var fechafinal = $('#final').val();
	var fechainicio = $('#inicio').val()
if( fechafinal < fechainicio){
	$('#final').val(fechainicio);
}
}
</script>
    <!-- Title Page-->
    <title>AutoSAL</title>
<link rel="stylesheet" href="css/croppie.css">
<link rel='stylesheet' href='css/croppie2.css'>
    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
	<script type="text/javascript" src="js/jquery-pack.js"></script>
	<script type="text/javascript" src="js/jquery.imgareaselect.min.js"></script>
    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
	<style>
	iframe {
    width: 100%;
    border: 0px solid black;
}
</style>
	<style>
	.cropit-preview {
  /* You can specify preview size in CSS */
  width: 960px;
  height: 540px;
}
</style>
<style>
.loader {
  color: #8080ff;
  font-size: 20px;
  margin: 100px auto;
  width: 1em;
  height: 1em;
  border-radius: 50%;
  position: relative;
  text-indent: -9999em;
  -webkit-animation: load4 1.3s infinite linear;
  animation: load4 1.3s infinite linear;
  -webkit-transform: translateZ(0);
  -ms-transform: translateZ(0);
  transform: translateZ(0);
}
@-webkit-keyframes load4 {
  0%,
  100% {
    box-shadow: 0 -3em 0 0.2em, 2em -2em 0 0em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 0;
  }
  12.5% {
    box-shadow: 0 -3em 0 0, 2em -2em 0 0.2em, 3em 0 0 0, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 -1em;
  }
  25% {
    box-shadow: 0 -3em 0 -0.5em, 2em -2em 0 0, 3em 0 0 0.2em, 2em 2em 0 0, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 -1em;
  }
  37.5% {
    box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0em 0 0, 2em 2em 0 0.2em, 0 3em 0 0em, -2em 2em 0 -1em, -3em 0em 0 -1em, -2em -2em 0 -1em;
  }
  50% {
    box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 0em, 0 3em 0 0.2em, -2em 2em 0 0, -3em 0em 0 -1em, -2em -2em 0 -1em;
  }
  62.5% {
    box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 0, -2em 2em 0 0.2em, -3em 0 0 0, -2em -2em 0 -1em;
  }
  75% {
    box-shadow: 0em -3em 0 -1em, 2em -2em 0 -1em, 3em 0em 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 0, -3em 0em 0 0.2em, -2em -2em 0 0;
  }
  87.5% {
    box-shadow: 0em -3em 0 0, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 0, -3em 0em 0 0, -2em -2em 0 0.2em;
  }
}
@keyframes load4 {
  0%,
  100% {
    box-shadow: 0 -3em 0 0.2em, 2em -2em 0 0em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 0;
  }
  12.5% {
    box-shadow: 0 -3em 0 0, 2em -2em 0 0.2em, 3em 0 0 0, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 -1em;
  }
  25% {
    box-shadow: 0 -3em 0 -0.5em, 2em -2em 0 0, 3em 0 0 0.2em, 2em 2em 0 0, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 -1em;
  }
  37.5% {
    box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0em 0 0, 2em 2em 0 0.2em, 0 3em 0 0em, -2em 2em 0 -1em, -3em 0em 0 -1em, -2em -2em 0 -1em;
  }
  50% {
    box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 0em, 0 3em 0 0.2em, -2em 2em 0 0, -3em 0em 0 -1em, -2em -2em 0 -1em;
  }
  62.5% {
    box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 0, -2em 2em 0 0.2em, -3em 0 0 0, -2em -2em 0 -1em;
  }
  75% {
    box-shadow: 0em -3em 0 -1em, 2em -2em 0 -1em, 3em 0em 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 0, -3em 0em 0 0.2em, -2em -2em 0 0;
  }
  87.5% {
    box-shadow: 0em -3em 0 0, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 0, -3em 0em 0 0, -2em -2em 0 0.2em;
  }
}

</style>

</head>

<body class="animsition">
    
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo-movil.png" alt="AutoSAL" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <?php if(basename($_SERVER["SCRIPT_FILENAME"], '.php')=='index'){
							echo '<li class="active">';
						}else{
							echo '<li>';
						}?>
                            <a href="inicio">
                                <i class="fas fa-tachometer-alt"></i>Inicio</a>
                        </li>
                        <?php if(basename($_SERVER["SCRIPT_FILENAME"], '.php')=='ventas'){
							echo '<li class="active">';
						}else{
							echo '<li>';
						}?>
                            <a href="ventas">
                                <i class="fas fa-money-bill-alt"></i>Ventas</a>
                        </li>
                        <?php if(basename($_SERVER["SCRIPT_FILENAME"], '.php')=='zonas'){
							echo '<li class="active">';
						}else{
							echo '<li>';
						}?>
                            <a href="zonas">
                                <i class="fas fa-home"></i>Zonas</a>
                        </li>
                        <li class="has sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-car"></i>Vehículos</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <?php if(basename($_SERVER["SCRIPT_FILENAME"], '.php')=='marcas'){
							echo '<li class="active">';
						}else{
							echo '<li>';
						}?>
                                    <a href="vehiculos/marcas"><i class="fas fa-car"></i>Marcas</a></a>
                                </li>
                        <?php if(basename($_SERVER["SCRIPT_FILENAME"], '.php')=='modelos'){
							echo '<li class="active">';
						}else{
							echo '<li>';
						}?>
                                    <a href="vehiculos/modelos"><i class="fas fa-car"></i>Modelos</a></a>
                                </li>
                            </ul>
                        </li>
                        <?php if(basename($_SERVER["SCRIPT_FILENAME"], '.php')=='usuarios'){
							echo '<li class="active">';
						}else{
							echo '<li>';
						}?>
                            <a href="usuarios">
                                <i class="fas fa-users"></i>Usuarios</a>
                        </li>
                        <li>
                            <a href="logout">
                                <i class="fas fa-sign-out-alt"></i>Cerrar Sesión</a>
                        </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="AutoSAL" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <?php if(basename($_SERVER["SCRIPT_FILENAME"], '.php')=='index'){
							echo '<li class="active">';
						}else{
							echo '<li>';
						}?>
                            <a href="inicio">
                                <i class="fas fa-tachometer-alt"></i>Inicio</a>
                        </li>
                        <?php if(basename($_SERVER["SCRIPT_FILENAME"], '.php')=='ventas'){
							echo '<li class="active">';
						}else{
							echo '<li>';
						}?>
                            <a href="ventas">
                                <i class="fas fa-money-bill-alt"></i>Ventas</a>
                        </li>
                        <?php if(basename($_SERVER["SCRIPT_FILENAME"], '.php')=='zonas'){
							echo '<li class="active">';
						}else{
							echo '<li>';
						}?>
                            <a href="zonas">
                                <i class="fas fa-home"></i>Zonas</a>
                        </li>
                        <li class="has sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-car"></i>Vehículos</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <?php if(basename($_SERVER["SCRIPT_FILENAME"], '.php')=='marcas'){
							echo '<li class="active">';
						}else{
							echo '<li>';
						}?>
                                    <a href="marcas"><i class="fas fa-car"></i>Marcas</a></a>
                                </li>
                        <?php if(basename($_SERVER["SCRIPT_FILENAME"], '.php')=='modelos'){
							echo '<li class="active">';
						}else{
							echo '<li>';
						}?>
                                    <a href="modelos"><i class="fas fa-car"></i>Modelos</a></a>
                                </li>
                            </ul>
                        </li>
                        <?php if(basename($_SERVER["SCRIPT_FILENAME"], '.php')=='usuarios'){
							echo '<li class="active">';
						}else{
							echo '<li>';
						}?>
                            <a href="usuarios">
                                <i class="fas fa-users"></i>Usuarios</a>
                        </li>
                        <li>
                            <a href="logout">
                                <i class="fas fa-sign-out-alt"></i>Cerrar Sesión</a>
                        </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                
                            </form>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="uploads/avatar_<?php echo $_SESSION['u_usuario'] ?>.jpg" alt="<?php echo $_SESSION['u_nombre'] ?>" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $_SESSION['u_nombre'] ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="uploads/avatar_<?php echo $_SESSION['u_usuario'] ?>.jpg" alt="<?php echo $_SESSION['u_nombre'] ?>" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $_SESSION['u_nombre'] ?></a>
                                                    </h5>
                                                    <span class="email"><?php echo $_SESSION['u_correo'] ?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="logout.php">
                                                    <i class="zmdi zmdi-power"></i>Cerrar Sesión</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
			<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
            <!-- HEADER DESKTOP-->
	<?php 
	date_default_timezone_set ('America/El_Salvador'); ?>