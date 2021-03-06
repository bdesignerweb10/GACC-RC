<?php 
	require_once("acts/connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta name="description" content="Gacc Rio Claro" />
	<meta name="keywords" content="Crianças, Câncer, Gacc, apoio, Gacc-RC" />
	<meta name="author" content="Bruno Gomes"/>

	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="index, follow" />
	
	<title>GACC - Rio Claro / SP</title>

	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
	<link rel="manifest" href="img/favicon/manifest.json">
	<link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="img/favicon/favicon.ico">	
	<meta name="msapplication-config" content="img/favicon/browserconfig.xml">	
	
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-toggle.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css">
	<link rel="stylesheet" type="text/css" href="css/textext.plugin.autocomplete.css">
	<link rel="stylesheet" type="text/css" href="css/lightbox.min.css">	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">	
</head>
<body>		
	<header class="header">
		<div class="container-fluid">
			<div class="row header-top" id="header-top">
				<div class="col-sm-3 header-contato">
					<p><i class="fas fa-envelope"></i> contato@gacc-rc.org.br</p>				
				</div>				
				<div class="col-sm-2 header-contato">
					<p><i class="fas fa-phone"></i> (19) 3534-5612</p>
				</div>		
				<div class="col-sm-4"></div>		
				<div class="col-sm-3 header-social">
					<p>
						<a href="https://www.facebook.com/gaccrioclaro/" target="_blank"><i class="fab fa-facebook-square"></i></a>
						<a href="https://www.instagram.com/gaccrc/?hl=pt-br" target="_blank"><i class="fab fa-instagram"></i></a>
						<a href="https://www.youtube.com/user/gaccrioclarosp" target="_blank"><i class="fab fa-youtube"></i></a>						
					</p>
				</div>
			</div><!-- row -->
			<div class="row" id="header-menu">				
				<div class="col-sm-3 logo">
					<a href="index.php"><img src="img/logo.png"></a>
				</div>				
				<div class="col-sm-9 header-menu">					
					<nav class="navbar navbar-expand-lg navbar-light">
					  <a class="navbar-brand" href="#"></a>
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					    <span class="navbar-toggler-icon"></span>
					  </button>

					  <div class="collapse navbar-collapse menu" id="navbarSupportedContent">
					    <ul class="navbar-nav mr-auto">
					      <li class="nav-item">
					        <a class="nav-link gacc" href="gacc.php" aria-disabled="true">GACC</a>
					      </li>	
					      <!--<li class="nav-item dropdown">
					        <a class="nav-link dropdown-toggle gacc" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          O GACC
					        </a>
					        <div class="dropdown-menu drop-gacc" aria-labelledby="navbarDropdown">
					          <a class="dropdown-item" href="historia.php">História</a>
					          <a class="dropdown-item" href="gacc-hoje.php">O GACC hoje</a>
					          <a class="dropdown-item" href="#">Diretoria</a>
					          <a class="dropdown-item" href="#">Estatuto</a>
					          <a class="dropdown-item" href="#">Regimento Interno</a>
					          <a class="dropdown-item" href="#">Resultados</a>					          
					        </div>
					      </li>-->
					      <li class="nav-item">
					        <a class="nav-link atuacao" href="como-atuamos.php" aria-disabled="true">Como atuamos</a>
					      </li>
					      <!--<li class="nav-item dropdown">
					        <a class="nav-link dropdown-toggle atuacao" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          Como atuamos
					        </a>
					        <div class="dropdown-menu drop-atuacao" aria-labelledby="navbarDropdown">
					          <a class="dropdown-item" href="transporte.php">Transporte</a>
					          <a class="dropdown-item" href="saude.php">Saúde</a>
					          <a class="dropdown-item" href="social.php">Social</a>
					          <a class="dropdown-item" href="musicoterapia.php">Musicoterapia</a>
					        </div>
					      </li>-->
					      <li class="nav-item dropdown">
					        <a class="nav-link dropdown-toggle tratamentos" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          Diagnóstico e tratamento
					        </a>
					        <div class="dropdown-menu drop-tratamentos" aria-labelledby="navbarDropdown">
					          <a class="dropdown-item" href="prevencoes-sintomas.php">Diagnóstico Precoce</a>
					          <a class="dropdown-item" href="tratamento.php">Tratamento</a>
					          <a class="dropdown-item" href="cuidados.php">Cuidados</a>
					          <a class="dropdown-item" href="direitos.php">Direitos</a>					          
					        </div>
					      </li>
					      <li class="nav-item dropdown">
					        <a class="nav-link dropdown-toggle ajuda" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					         Como ajudar
					        </a>
					        <div class="dropdown-menu drop-ajuda" aria-labelledby="navbarDropdown">
					          <a class="dropdown-item" href="doacao.php">Faça sua doação</a>
					          <a class="dropdown-item" href="empresa-parceira.php">Projeto Empresa Parceira</a>
					          <a class="dropdown-item" href="formas-ajudar.php">Outras formas de ajudar</a>
					          <a class="dropdown-item" href="eventos.php">Eventos</a>
					          <a class="dropdown-item" href="seja-voluntario.php">Seja voluntário</a>					          
					        </div>
					      </li>					      
					      <li class="nav-item">
					        <a class="nav-link contato" href="contato.php" aria-disabled="true">Contato</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link quero-doar" href="doacao.php" aria-disabled="true">Quero Doar</a>
					      </li>
					    </ul>					    
					  </div>
					</nav>
				</div>	
			</div><!-- row -->			
		</div><!-- container -->
	</header>