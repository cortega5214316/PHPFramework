
<?php

	//session_start();

	include_once("../includes/header_menu.php");
	
	//$main_header = $admin_header_menu;
	$main_header = $admin_non_menu;
	
	
?>

	<!DOCTYPE html>
	<html class="st-layout ls-top-navbar ls-bottom-footer show-sidebar sidebar-l2" lang="es">
		<head>
			<meta charset="utf-8">
        	<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="description" content="">
			<meta name="author" content="">
			<title>QHC</title>
			<!-- Compressed Vendor BUNDLE
			Includes vendor (3rd party) styling such as the customized Bootstrap and other 3rd party libraries used for the current theme/module -->
			<link href="../css/vendor.min.css" rel="stylesheet">
			<link href="../css/module-layout.min.css" rel="stylesheet">
			<link href="../css/vendor-theme-core.css" rel="stylesheet">
			
			<link href="../css/module-essentials.css" rel="stylesheet" />
			<link href="../css/module-sidebar.min.css" rel="stylesheet" />
			<link href="../css/module-sidebar-skins.min.css" rel="stylesheet" />
			<link href="../css/vendor-module-navbar.css" rel="stylesheet" />
            
            <link href="../css/module-timeline.css" rel="stylesheet" />
            <link href="../css/module-cover.min.css" rel="stylesheet" />
            <link href="../css/module-chat.min.css" rel="stylesheet" />
            <!-- <link href="css/module-charts.min.css" rel="stylesheet" /> -->
            <link href="../css/module-maps.min.css" rel="stylesheet" />
			<script src="http://code.jquery.com/jquery-2.1.0.js"></script>
			<script src="../js/signup.js"></script>
			<script src="../js/main.js"></script>
			<script src="../js/ajax.js"></script>
			<script src="../js/functions.js"></script>
			
		</head>
		<body>
			<!-- Wrapper required for sidebar transitions -->
			<div class="st-container">
				<!-- Fixed navbar -->
				<div class="navbar navbar-main navbar-default navbar-fixed-top" role="navigation">
					<div class="container-fluid">
						<div class="navbar-header">
							<a href="#sidebar-menu" data-effect="st-effect-1" data-toggle="sidebar-menu" class="toggle pull-left visible-xs"><i class="fa fa-bars"></i></a>
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>							
                            </button>
							<a href="#sidebar-chat" data-toggle="sidebar-menu" data-effect="st-effect-1" class="toggle pull-right visible-xs ">
                                <i class="fa fa-comments"></i>
                            </a>
							<a class="navbar-brand navbar-brand-primary hidden-xs" href="index.html">
                                <img src="../images/QDC_Logo_Title_1.png" alt="Logo" vspace="5" title="QHDC">
                            </a>						
                        </div>
						<div class="collapse navbar-collapse" id="main-nav">  
                        	<form class="navbar-form margin-none navbar-left hidden-xs ">
                                <!-- Search -->
                                <div class="search-1">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="icon-search"></i></span>
                                        <input type="text" class="form-control" placeholder="Search Site">
                                    </div>
                                </div>
                            </form>				
							<ul class="nav navbar-nav navbar-right">
                                <!-- notifications -->
                                <li class="dropdown notifications updates hidden-xs hidden-sm">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-bell-o"></i>
                                        <span class="badge badge-primary">4</span>
                                    </a>
                                    <ul class="dropdown-menu" role="notification">
                                        <li class="dropdown-header">Notifications</li>
                                        <li class="media">
                                            <div class="pull-right">
                                                <span class="label label-success">New</span>
                                            </div>
                                            <div class="media-body">
                                                <a href="#">
                                                    <img src="images/people/50/guy-2.jpg" alt="people" class="img-circle" width="20"> Adrian D.
                                                </a>
                                                posted a <i class="fa fa-photo"></i> <a href="#">photo</a> on his timeline.
                                                <small class="text-muted">5 min</small>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="pull-right">
                                                <span class="label label-success">New</span>
                                            </div>
                                            <div class="media-body">
                                                <a href="#">
                                                    <img src="images/people/50/guy-6.jpg" alt="people" class="img-circle" width="20"> Bill
                                                </a>
                                                posted a <i class="fa fa-comments"></i> <a href="#">comment</a> on Adrian's recent <a href="#">post</a>.
                                                <small class="text-muted">3 hrs</small>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-body">
                                                <a href="#">
                                                    <img src="images/people/50/woman-6.jpg" alt="people" class="img-circle" width="20"> Mary D.
                                                </a> and
                                                <a href="#">
                                                    <img src="images/people/50/woman-3.jpg" alt="people" class="img-circle" width="20"> Michelle
                                                </a>
                                                are now friends.
                                                <small class="text-muted">1 day</small>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <!-- // END notifications -->
                                <!-- messages -->
                                <li class="dropdown notifications hidden-xs hidden-sm">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-envelope-o"></i>
                                        <span class="badge floating badge-danger">12</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object thumb" src="images/people/50/guy-2.jpg" alt="people">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="pull-right">
                                                    <span class="label label-default">5 min</span>
                                                </div>
                                                <h5 class="media-heading">Adrian D.</h5>
                                                <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object thumb" src="images/people/50/woman-7.jpg" alt="people">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="pull-right">
                                                    <span class="label label-default">2 days</span>
                                                </div>
                                                <h5 class="media-heading">Jane B.</h5>
                                                <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object thumb" src="images/people/50/guy-8.jpg" alt="people">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="pull-right">
                                                    <span class="label label-default">3 days</span>
                                                </div>
                                                <h5 class="media-heading">Andrew M.</h5>
                                                <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <!-- // END messages -->
                                <!-- Comments -->
                                <li class="dropdown notifications hidden-xs hidden-sm">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-comments"></i>
                                        <span class="badge badge-primary">8</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object thumb" src="images/people/50/guy-2.jpg" alt="people">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="pull-right">
                                                    <span class="label label-default">5 min</span>
                                                </div>
                                                <h5 class="media-heading">Adrian D.</h5>
                                                <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object thumb" src="images/people/50/woman-7.jpg" alt="people">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="pull-right">
                                                    <span class="label label-default">2 days</span>
                                                </div>
                                                <h5 class="media-heading">Jane B.</h5>
                                                <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object thumb" src="images/people/50/guy-8.jpg" alt="people">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="pull-right">
                                                    <span class="label label-default">3 days</span>
                                                </div>
                                                <h5 class="media-heading">Andrew M.</h5>
                                                <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <!-- // END Comments -->
                            	<li class="hidden-xs">
                            		<a href="#sidebar-chat" data-toggle="sidebar-menu">
                                		<i class="fa fa-file-text-o"></i>
                            		</a>
                        		</li>
								<li class="pull-right">
									<a href="#sidebar-chat" data-effect="st-effect-1" data-toggle="sidebar-menu">
										<i class="fa fa-sign-out"></i>									
                                    </a>								
                                </li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Sidebar component with st-effect-1 (set on the toggle button within the navbar) -->
                <div class="sidebar left sidebar-size-2 sidebar-offset-0 sidebar-visible-desktop sidebar-visible-mobile sidebar-skin-dark" id="sidebar-menu" data-type="collapse">
                    <div data-scrollable>
                    	<div class="sidebar-block">
                            <div class="profile">
                                <img src="../images/people/110/guy-4.jpg" alt="people" class="img-circle" />
                                <h4>Carlos O.</h4>
                            </div>
                        </div>
                        <ul class="sidebar-menu">
                            <li class="category">Mi Cuenta</li>
                            <li class="hasSubmenu">
                                <a href="#components"><i class="icon-ship-wheel"></i> <span>Timeline</span></a>
                                <ul id="components">
                                    <li><a href="essential-buttons.html"><i class="fa fa-newspaper-o"></i> <span>Listar Todos</span></a>
                                    </li>
                                    <li><a href="essential-icons.html"><i class="fa fa-fw fa-filter"></i> <span>Filtrar</span></a>
                                    </li>
                                    <li><a href="essential-progress.html"><i class="fa fa-calendar"></i> <span>Fechas</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="">
                            	<a href="profile.html">
                                	<i class="icon-user-1"></i> 
                                    <span>Perfil</span>
                                </a>
                            </li>
                            <li class="">
                            	<a href="users.html">
                                	<i class="fa fa-group"></i> 
                                    <span>Miembros</span>
                                </a>
                            </li>
                            <li class="">
                            	<a href="messages.html">
                                	<i class="icon-comment-fill-1"></i> 
                                    <span>Mensages</span>
                                </a>
                            </li>
                            <li>
                            	<a href="logout.html">
                                	<i class="fa fa-sign-out"></i> 
                                    <span>Salir</span>
                                </a>
                            </li>
                        </ul>
                   		<h4 class="category border top">Mi Cocina</h4>
                        <ul class="sidebar-menu">
                            <!-- Sample 2 Level Collapse -->
                            <li class="hasSubmenu">
                                <a href="#receipes">
                                	<i class="fa fa-book"></i> 
                                    <span>Recetario</span>
                                </a>
                                <ul id="receipes">
                                    <li class="hasSubmenu">
                                        <a href="#recetas-group">
                                        	<i class="fa fa-list-alt"></i> 
                                            Grupos
                                        </a>
                                        <ul id="recetas-group">
                                            <li>
                                            	<a href="#">Postres</a>
                                            </li>
                                            <li>
                                            	<a href="#">Sopas</a>
                                            </li>
                                            <li>
                                            	<a href="#">Comida Italiana</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                    	<a href="#">
                                        	<i class="fa fa-pencil"></i> 
                                            Crear Recetas
                                        </a>
                                    </li>
                                    <li>
                                    	<a href="#">
                                        	<i class="fa fa-search"></i> 
                                            Buscar Recetas
                                        </a>
                                    </li>
                                    <li>
                                    	<a href="#">
                                        	<i class="fa fa-plus"></i> 
                                            Crear Grupo
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                            	<a href="login.html">
                                	<i class="fa fa-heart-o"></i> 
                                    <span>Recetas Favoritas</span>
                                </a>
                            </li>
                            <li class="hasSubmenu">
                                <a href="#friends">
                                	<i class="fa fa-group"></i> 
                                    <span>Amigos</span>
                                </a>
                                <ul id="friends">
                                    <li><a href="essential-buttons.html"><i class="fa fa-newspaper-o"></i> <span>Listar</span></a>
                                    </li>
                                    <li><a href="essential-icons.html"><i class="fa fa-user-plus"></i> <span>Agregar</span></a>
                                    </li>
                                    <li><a href="essential-icons.html"><i class="fa fa-check-square-o"></i> <span>Aceptar</span></a>
                                    </li>
                                    <li><a href="essential-progress.html"><i class="fa fa-user-times"></i> <span>Bloquear</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <h4 class="category border top">Comunidades</h4>
                        <ul class="sidebar-menu">
                        	<li class="">
                            	<a href="#qhdch">
                                	<i class="icon-oven"></i> 
                                  	<span>Que Hago de Comer</span>
                                </a>
                          	</li>
                            <!-- Sample 2 Level Collapse -->
                            <li class="hasSubmenu">
                                <a href="#add-groups">
                                	<i class="icon-user-1"></i> 
                                    <span>Grupos</span>
                                </a>
                                <ul id="add-groups">
                                    <li class="hasSubmenu">
                                        <a href="#groups-list">
                                        	<i class="fa fa-group"></i> 
                                            Lista
                                        </a>
                                        <ul id="groups-list">
                                            <li>
                                            	<a href="#">Las Nortenas</a>
                                            </li>
                                            <li>
                                            	<a href="#">Las Cuchi-Cuchi</a>
                                            </li>
                                            <li>
                                            	<a href="#">Amas de Casa</a>
                                            </li>
                                            <li>
                                            	<a href="#">Chilangas</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                    	<a href="#">
                                        	<i class="fa fa-user-plus"></i> 
                                            Crear Grupo
                                        </a>
                                    </li>
                                    <li>
                                    	<a href="#">
                                        	<i class="fa fa-search"></i> 
                                            Listar Grupos
                                        </a>
                                    </li>
                                    <li>
                                    	<a href="#">
                                        	<i class="fa fa-gears"></i> 
                                            Admin. Grupos
                                        </a>
                                    </li>
                                </ul>
                            </li>
                          	<li class="">
                           		<a href="profile.html">
                            		<i class="fa fa-file-text-o"></i> 
                                  	<span>Lista</span>
                              	</a>
                         	</li>
                      	</ul>
                        <h4 class="category border top">Siguiendo</h4>
                        <ul class="sidebar-menu">
                        	<li class="">
                            	<a href="profile.html">
                                	<i class="fa fa-th-list"></i> 
                                  	<span>Listar</span>
                              	</a>
                          	</li>
                        	<li class="">
                            	<a href="profile.html">
                                	<i class="fa fa-user-plus"></i> 
                                  	<span>Solicitar</span>
                              	</a>
                          	</li>
                            <li class="">
                            	<a href="profile.html">
                                	<i class="fa fa-check-square-o"></i> 
                                  	<span>Seleccionar</span>
                              	</a>
                          	</li>
                        	<div class="sidebar-block">
                                <ul class="sidebar-feed">
                                    <li class="media">
                                        <div class="media-left">
                                            <span class="media-object">
                                                <i class="fa fa-fw fa-bell"></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <a href="" class="text-white">Adrian</a> just logged in
                                            <span class="time">2 min ago</span>
                                        </div>
                                        <div class="media-right">
                                            <span class="news-item-success">
                                                <i class="fa fa-circle"></i>
                                            </span>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-left">
                                            <span class="media-object">
                                                <i class="fa fa-fw fa-bell"></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <a href="" class="text-white">Adrian</a> just added <a href="" class="text-white">mosaicpro</a> as their office
                                            <span class="time">2 min ago</span>
                                        </div>
                                        <div class="media-right">
                                            <span class="news-item-success"><i class="fa fa-circle"></i></span>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-left">
                                            <span class="media-object">
                                        <i class="fa fa-fw fa-bell"></i>
                                    </span>
                                        </div>
                                        <div class="media-body">
                                            <a href="" class="text-white">Adrian</a> just logged in
                                            <span class="time">2 min ago</span>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-left">
                                            <span class="media-object">
                                        <i class="fa fa-fw fa-bell"></i>
                                    </span>
                                        </div>
                                        <div class="media-body">
                                            <a href="" class="text-white">Adrian</a> just logged in
                                            <span class="time">2 min ago</span>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-left">
                                            <span class="media-object">
                                        <i class="fa fa-fw fa-bell"></i>
                                    </span>
                                        </div>
                                        <div class="media-body">
                                            <a href="" class="text-white">Adrian</a> just logged in
                                            <span class="time">2 min ago</span>
                                        </div>
                                    </li>
                                </ul>
                        	</div>
                        </ul>
                        <h4 class="category">Filter</h4>
                        <div class="sidebar-block">
                            <ul>
                                <li><a href="#" class="sidebar-link"><span class="fa fa-fw fa-circle-o text-success"></span> Work Related</a>
                                </li>
                                <li><a href="#" class="sidebar-link"><span class="fa fa-fw fa-circle-o text-danger"></span> Very Important</a>
                                </li>
                                <li><a href="#" class="sidebar-link"><span class="fa fa-fw fa-circle-o text-info"></span> Friends &amp; Family</a>
                                </li>
                                <li><a href="#" class="sidebar-link"><span class="fa fa-fw fa-circle-o text-primary"></span> Other</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
				<div class="st-pusher" id="content">
					<!-- sidebar effects INSIDE of st-pusher: -->
					<!-- st-effect-3, st-effect-6, st-effect-7, st-effect-8, st-effect-14 -->
					<!-- this is the wrapper for the content -->
					<div class="st-content">
						<!-- extra div for emulating position:fixed of the menu -->
						<div class="st-content-inner">
                        	<nav class="navbar navbar-subnav navbar-static-top margin-bottom-none" role="navigation">
                                <div class="container-fluid">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#subnav">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="fa fa-ellipsis-h"></span>
                                        </button>
                                    </div>
                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse" id="subnav">
                                        <?php echo $main_header; ?>
                                    </div>
                                    <!-- /.navbar-collapse -->
                                </div>
                            </nav>
                            <div class="cover overlay cover-image-full-all height-300-lg">
                                <?php echo $qhdch_main_pic; ?>
                                <div class="overlay overlay-full">
                                    <div class="v-top">
                                        <a href="#" class="btn btn-cover"><i class="fa fa-pencil"></i></a>
                                    </div>
                                </div>
                            </div>
                            <?php echo $qhdch_header_submenu; ?>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="subnav">
                                <ul class="nav navbar-nav ">
                                    <li class="active"><a href="index.html"><i class="fa fa-fw icon-ship-wheel"></i> Timeline</a>
                                    </li>
                                    <li><a href="user-public-profile.html"><i class="fa fa-fw icon-user-1"></i> About</a>
                                    </li>
                                    <li><a href="user-public-users.html"><i class="fa fa-fw fa-users"></i> Friends</a>
                                    </li>
                                    <!-- User -->
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        	<i class="fa fa-fw fa-users"></i> Friends
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="user-private-profile.html">Profile</a>
                                            </li>
                                            <li><a href="user-private-messages.html">Messages</a>
                                            </li>
                                            <li><a href="login.html">Logout</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="nav navbar-nav hidden-xs navbar-right ">
                                    <li><a href="#" data-toggle="chat-box">Chat <i class="fa fa-fw fa-comment-o"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="container-fluid">
                            	<div class="timeline column-left-40" data-toggle="isotope">
                                	<div class="col-xs-12 col-md-6 col-lg-12 item">
                                        <div class="timeline-block">
                                            <div class="panel panel-default share clearfix-xs">
                                                <div class="panel-footer share-menu-buttons">
                                                    <a href="#"><i class="fa fa-newspaper-o"></i></a>
                                                    <a href="#"><i class="fa fa-fw fa-filter"></i></a>
                                                    <a href="#"><i class="fa fa-calendar"></i></a>
                                                    <button type="submit" class="btn btn-primary btn-xs pull-right display-none" href="#">Post</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6 col-lg-12 item">
                                        <div class="timeline-block">
                                            <div class="panel panel-default share clearfix-xs">
                                                <div class="panel-heading panel-heading-gray title">
                                                    What&acute;s new
                                                </div>
                                                <div class="panel-body">
                                                    <textarea name="status" class="form-control share-text" rows="3" placeholder="Share your status..."></textarea>
                                                </div>
                                                <div class="panel-footer share-buttons">
                                                    <a href="#"><i class="fa fa-map-marker"></i></a>
                                                    <a href="#"><i class="fa fa-photo"></i></a>
                                                    <a href="#"><i class="fa fa-video-camera"></i></a>
                                                    <button type="submit" class="btn btn-primary btn-xs pull-right display-none" href="#">Post</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            	</div>
                                <div class="timeline column-center-40" data-toggle="isotope">
                                	<div class="col-xs-12 col-md-6 col-lg-12 item">
                                        <div class="timeline-block">
                                            <div class="panel panel-default relative">
                                                <img src="../images/place2-full.jpg" alt="place" class="img-responsive">
                                                <div class="panel-body panel-boxed text-center">
                                                    <div class="rating">
                                                        <span class="star"></span>
                                                        <span class="star filled"></span>
                                                        <span class="star filled"></span>
                                                        <span class="star filled"></span>
                                                        <span class="star filled"></span>
                                                    </div>
                                                </div>
                                                <div class="panel-body">
                                                    <img src="../images/people/50/guy-2.jpg" alt="people" class="img-circle" />
                                                    <img src="../images/people/50/woman-2.jpg" alt="people" class="img-circle" />
                                                    <img src="../images/people/50/guy-3.jpg" alt="people" class="img-circle" />
                                                    <img src="../images/people/50/woman-3.jpg" alt="people" class="img-circle" />
                                                    <a href="#" class="user-count-circle">12+</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6 col-lg-12 item">
                                        <div class="timeline-block">
                                            <div class="panel panel-default relative">
                                                <img src="../images/place2-full.jpg" alt="place" class="img-responsive">
                                                <div class="panel-body panel-boxed text-center">
                                                    <div class="rating">
                                                        <span class="star"></span>
                                                        <span class="star filled"></span>
                                                        <span class="star filled"></span>
                                                        <span class="star filled"></span>
                                                        <span class="star filled"></span>
                                                    </div>
                                                </div>
                                                <div class="panel-body">
                                                    <img src="../images/people/50/guy-2.jpg" alt="people" class="img-circle" />
                                                    <img src="../images/people/50/woman-2.jpg" alt="people" class="img-circle" />
                                                    <img src="../images/people/50/guy-3.jpg" alt="people" class="img-circle" />
                                                    <img src="../images/people/50/woman-3.jpg" alt="people" class="img-circle" />
                                                    <a href="#" class="user-count-circle">12+</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6 col-lg-12 item">
                                        <div class="timeline-block">
                                            <div class="panel panel-default relative">
                                                <img src="../images/place2-full.jpg" alt="place" class="img-responsive">
                                                <div class="panel-body panel-boxed text-center">
                                                    <div class="rating">
                                                        <span class="star"></span>
                                                        <span class="star filled"></span>
                                                        <span class="star filled"></span>
                                                        <span class="star filled"></span>
                                                        <span class="star filled"></span>
                                                    </div>
                                                </div>
                                                <div class="panel-body">
                                                    <img src="../images/people/50/guy-2.jpg" alt="people" class="img-circle" />
                                                    <img src="../images/people/50/woman-2.jpg" alt="people" class="img-circle" />
                                                    <img src="../images/people/50/guy-3.jpg" alt="people" class="img-circle" />
                                                    <img src="../images/people/50/woman-3.jpg" alt="people" class="img-circle" />
                                                    <a href="#" class="user-count-circle">12+</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6 col-lg-12 item">
                                        <div class="timeline-block">
                                            <div class="panel panel-default relative">
                                                <img src="../images/place2-full.jpg" alt="place" class="img-responsive">
                                                <div class="panel-body panel-boxed text-center">
                                                    <div class="rating">
                                                        <span class="star"></span>
                                                        <span class="star filled"></span>
                                                        <span class="star filled"></span>
                                                        <span class="star filled"></span>
                                                        <span class="star filled"></span>
                                                    </div>
                                                </div>
                                                <div class="panel-body">
                                                    <img src="../images/people/50/guy-2.jpg" alt="people" class="img-circle" />
                                                    <img src="../images/people/50/woman-2.jpg" alt="people" class="img-circle" />
                                                    <img src="../images/people/50/guy-3.jpg" alt="people" class="img-circle" />
                                                    <img src="../images/people/50/woman-3.jpg" alt="people" class="img-circle" />
                                                    <a href="#" class="user-count-circle">12+</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            	</div>
                                <div class="timeline column-right" data-toggle="isotope">
                                	<div class="col-xs-12 col-md-6 col-lg-12 item">
                                        <div class="timeline-block">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <a href="">
                                                                <img src="../images/people/50/woman-6.jpg" class="media-object">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <a href="#" class="pull-right text-muted">
                                                            	<i class="icon-reply-all-fill fa fa-2x "></i>
                                                          	</a>
                                                            <a href="">Michelle</a>
                                                            <span>on 15th January, 2014</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel-body">
                                                    <p>Late Night Show Photos</p>
                                                    <div class="timeline-added-images">
                                                        <img src="../images/social/100/1.jpg" width="80" alt="photo" />
                                                        <img src="../images/social/100/2.jpg" width="80" alt="photo" />
                                                        <img src="../images/social/100/3.jpg" width="80" alt="photo" />
                                                    </div>
                                                </div>
                                                <div class="view-all-comments">
                                                    <a href="#">
                                                        <i class="fa fa-comments-o"></i> View all
                                                    </a>
                                                    <span>10 comments</span>
                                                </div>
                                                <ul class="comments">
                                                    <li class="media">
                                                        <div class="media-left">
                                                            <a href="">
                                                                <img src="../images/people/50/guy-5.jpg" class="media-object">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="pull-right dropdown" data-show-hover="li">
                                                                <a href="#" data-toggle="dropdown" class="toggle-button">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <ul class="dropdown-menu" role="menu">
                                                                    <li><a href="#">Edit</a>
                                                                    </li>
                                                                    <li><a href="#">Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <a href="" class="comment-author pull-left">Bill D.</a>
                                                            <span>Hi Mary, Nice Party</span>
                                                            <div class="comment-date">21st September</div>
                                                        </div>
                                                    </li>
                                                    <li class="media">
                                                        <div class="media-left">
                                                            <a href="">
                                                                <img src="../images/people/50/woman-5.jpg" class="media-object">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="pull-right dropdown" data-show-hover="li">
                                                                <a href="#" data-toggle="dropdown" class="toggle-button">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <ul class="dropdown-menu" role="menu">
                                                                    <li><a href="#">Edit</a>
                                                                    </li>
                                                                    <li><a href="#">Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <a href="" class="comment-author pull-left">Mary</a>
                                                            <span>Thanks Bill</span>
                                                            <div class="comment-date">2 days</div>
                                                        </div>
                                                    </li>
                                                    <li class="media">
                                                        <div class="media-left">
                                                            <a href="">
                                                                <img src="../images/people/50/guy-5.jpg" class="media-object">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="pull-right dropdown" data-show-hover="li">
                                                                <a href="#" data-toggle="dropdown" class="toggle-button">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <ul class="dropdown-menu" role="menu">
                                                                    <li><a href="#">Edit</a>
                                                                    </li>
                                                                    <li><a href="#">Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <a href="" class="comment-author pull-left">Bill D.</a>
                                                            <span>What time did it finish?</span>
                                                            <div class="comment-date">14 min</div>
                                                        </div>
                                                    </li>
                                                    <li class="comment-form">
                                                        <div class="input-group">
                                                            <span class="input-group-btn">
                                                               <a href="" class="btn btn-default">
                                                               	<i class="fa fa-photo"></i>
                                                               </a>
                                                            </span>
                                                            <input type="text" class="form-control" />
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                            	</div>
                            </div>
                        </div>
                		<!-- /st-content-inner -->
					</div>
					<!-- /st-content -->
				</div>
				<!-- /st-pusher -->
				<!-- Footer -->
				<footer class="footer">
					<ul class="languaje_list">
						<li>Español</li>
						<li>
						  <a dir="ltr" href="../index.php?language=en" onClick="setLocalCookie(&quot;en_US&quot;, &quot;es_LA&quot;, &quot;http:\/\/www.qhdc.com\/&quot;, &quot;qhdc_Language&quot;, 0); return false;" title=	 "English">Ingles (US)</a>
						</li>
						<li>
						  <a dir="ltr" href="../index.php?language=pt" onClick="setLocalCookie(&quot;pt_BR&quot;, &quot;es_LA&quot;, &quot;http:\/\/www.qhdc.com\pt\/&quot;, &quot;qhdc_Language&quot;, 4); return false;" title="Portuguese">Português</a>
						</li>
						<li>
						  <a dir="ltr" href="../index.php?language=it" onClick="setLocalCookie(&quot;it_IT&quot;, &quot;es_LA&quot;, &quot;http:\/\/www.qhdc.com\it\/&quot;, &quot;qhdc_Language&quot;, 5); return false;" title="Italian">Italiano</a>
						</li>
						<li></li>
						<li class="pull-right">
							 <strong>IEEC.LLC</strong> v3.6.3 &copy; Copyright 2016
					  </li>
					</ul>
				</footer>
				<!-- // Footer -->
			</div>
			<!-- /st-container -->
			<!-- Inline Script for colors and config objects; used by various external scripts; -->
			<script>
				var colors = {
								"danger-color": "#e74c3c",
								"success-color": "#81b53e",
								"warning-color": "#f0ad4e",
								"inverse-color": "#2c3e50",
								"info-color": "#2d7cb5",
								"default-color": "#6e7882",
								"default-light-color": "#cfd9db",
								"purple-color": "#9D8AC7",
								"mustard-color": "#d4d171",
								"lightred-color": "#e15258",
								"body-bg": "#f6f6f6"
							};
				var config = {
								theme: "social-1",
								skins: {
											"default": 
												{
													"primary-color": "#FB840D"
												},
											"orange": 
												{
													"primary-color": "#e74c3c"
												},
											"blue": 
												{
													"primary-color": "#4687ce"
												},
											"purple": 
												{
													"primary-color": "#af86b9"
												},
											"brown": 
												{
													"primary-color": "#c3a961"
												}
										}
							};
			</script>
			<!-- <link href="css/module-media.min.css" rel="stylesheet" /> -->
			<script src="../js/jquery-1.3.2.min.js"></script>
			<!-- Separate Vendor Script Bundles -->
			<script src="../js/vendor-core.min.js"></script>    
			<script src="../js/module-layout.min.js"></script>
            <!-- <script src="js/vendor-tree.min.js"></script> -->
            <!-- <script src="js/vendor-nestable.min.js"></script> -->
            <!-- <script src="js/vendor-angular.min.js"></script> -->
            <!-- Compressed Vendor Scripts Bundle
            Includes all of the 3rd party JavaScript libraries above.
            The bundle was generated using modern frontend development tools that are provided with the package
            To learn more about the development process, please refer to the documentation.
            Do not use it simultaneously with the separate bundles above. -->
            <!-- <script src="js/vendor-bundle-all.min.js"></script> -->
            <!-- Compressed App Scripts Bundle
            Includes Custom Application JavaScript used for the current theme/module;
            Do not use it simultaneously with the standalone modules below. -->
            <!-- <script src="js/module-bundle-main.min.js"></script> -->
            <!-- Standalone Modules
            As a convenience, we provide the entire UI framework broke down in separate modules
            Some of the standalone modules may have not been used with the current theme/module
            but ALL the modules are 100% compatible -->
            <script src="../js/module-sidebar.js"></script>
            <!-- <script src="js/module-media.min.js"></script> -->
            <!-- <script src="js/module-player.min.js"></script> -->
			
		</body>
	</html> 


