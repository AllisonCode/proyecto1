<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>AutoSAL</title>

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

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <?php 
    session_start();

    if(isset($_SESSION['u_usuario'])){

    }
    else{
        header("Location: login");
    }
    ?>
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
                            <a href="logout.php">
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
                            <a href="logout.php">
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
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">john doe</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">john doe</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
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