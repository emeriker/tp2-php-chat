<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>TP2 - Chat</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link
	href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800"
	rel="stylesheet">
<link
	href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900"
	rel="stylesheet">

<link rel="apple-touch-icon" href="apple-touch-icon.png">

<link rel="stylesheet"
	href=<?PHP echo base_url('assets/css/bootstrap.min.css')?>>
<link rel="stylesheet"
	href=<?PHP echo base_url('assets/css/bootstrap-theme.min.css')?>>
<link rel="stylesheet"
	href=<?PHP echo base_url('assets/css/fontAwesome.css')?>>
<link rel="stylesheet"
	href=<?PHP echo base_url('assets/css/hero-slider.css')?>>
<link rel="stylesheet"
	href=<?PHP echo base_url('assets/css/owl-carousel.css')?>>
<link rel="stylesheet"
	href=<?PHP echo base_url('assets/css/templatemo-style.css')?>>
<link rel="stylesheet"
	href=<?PHP echo base_url('assets/css/lightbox.css')?>>
<link rel="stylesheet"
	href=<?PHP echo base_url('assets/css/costum.css')?>>

</head>
<body>
	<div class="header active">
		<div class="container">
			<nav class="navbar navbar-inverse" role="navigation">
				<div class="navbar-header">
					<button type="button" id="nav-toggle" class="navbar-toggle"
						data-toggle="collapse" data-target="#main-nav">
						<span class="sr-only">Toggle navigation</span> <span
							class="icon-bar"></span> <span class="icon-bar"></span> <span
							class="icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand scroll-top"><em>T</em>P2 - Chat</a>
				</div>
				<!--/.navbar-header-->
				<div id="main-nav" class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li><a href=<?PHP echo base_url('index.php')?>>Accueil</a></li>
						<li><a href=<?PHP echo base_url('index.php/salles')?>>Salles</a></li>
						<li><a href=<?PHP echo base_url('index.php/connexion')?>>Connexion</a></li>
						<?php if($_SESSION ['isAdmin']){?>
						<li><a href=<?PHP echo base_url('index.php/gestion')?>>Gestion</a></li>
						<?php }?>
					</ul>
				</div>
				<!--/.navbar-collapse-->
			</nav>
			<!--/.navbar-->
		</div>
		<!--/.container-->
	</div>
	<!--/.header-->