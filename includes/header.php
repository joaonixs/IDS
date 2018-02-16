<?php 
	require_once('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>IDS - Instituto de Diagnóstico de Sorocaba</title>
	<!-- favicon -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon-16x16.png">
	<link rel="manifest" href="assets/images/site.webmanifest">
	<link rel="mask-icon" href="assets/images/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#2d89ef">
	<meta name="theme-color" content="#ffffff">
	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Pontano+Sans|Ropa+Sans" rel="stylesheet">
	<!-- boostrap -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
	<!-- owl carousel -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.css">
	<!-- custom -->
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<!-- header -->
	<header>
		<div class="container">
			<div class="row">
				<!-- logo -->
				<div class="col-md-2 col-sm-12 col-12 header-logo">
					<a href="https://www.ids.med.br/" title="Logo IDS">
						<img src="assets/images/logo.png" alt="Logo IDS">
					</a>
				</div>
				
				<!-- contact -->
				<div class="col-md-8 col-sm-12 col-12 header-contact">
					<!-- item -->
					<div class="header-item-contact">
						<div class="header-item-icon">
							<img src="assets/images/phone.png" alt="Icon header - IDS">
						</div>
						<div class="header-item-text fone">
							<span>Agende seu exame:</span>
							<b>(15) 3331-6220</b>
						</div>
					</div>
					<!-- !item -->

					<!-- item -->
					<div class="header-item-contact">
						<div class="header-item-icon">
							<img src="assets/images/wpp.png" alt="Icon header - IDS">
						</div>
						<div class="header-item-text wpp">
							<span>Whatsapp IDS:</span>
							<b>(15) 99790-8897</b>
						</div>
					</div>
					<!-- !item -->
				</div>
				
				<!-- social -->
				<div class="col-md-2 col-sm-12 col-12 header-social">
					<a href="https://www.facebook.com/idssorocaba/" target="_blank" title="Facebook - IDS">
						<img src="assets/images/facebook.png" alt="Facebook - IDS">
					</a>

					<a href="https://www.youtube.com/channel/UCGK2V90wzDuTmyY9CqYUAaQ" target="_blank" title="YouTube - IDS">
						<img src="assets/images/youtube.png" alt="YouTube - IDS">
					</a>
				</div>
			</div>
		</div>
	</header>
	<!-- !header -->

	<!-- menu -->
	<div class="container">
		<div class="row menu-header">
			<div class="col-md-20 col-sm-20 col-20 menu-pages one">
				<a href="preagendamento.php" title="Logo IDS">
					<img src="assets/images/calendario.png" alt="Icon IDS">
					Pré-Agendamento
				</a>
			</div>
			<div class="col-md-20 col-sm-20 col-20 menu-pages two">
				<a href="unidades.php" title="Logo IDS">
					<img src="assets/images/unidades.png" alt="Icon IDS">
					Unidades
				</a>
			</div>
			<div class="col-md-20 col-sm-20 col-20 menu-pages three">
				<a href="exames.php" title="Logo IDS">
					<img src="assets/images/exames.png" alt="Icon IDS">
					Exames
				</a>
			</div>
			<div class="col-md-20 col-sm-20 col-20 menu-pages four">
				<a href="https://www.clickvita.com.br/clinica/IDS" title="Logo IDS">
					<img src="assets/images/resultados.png" alt="Icon IDS">
					Resultado de Exames
				</a>
			</div>
			<div class="col-md-20 col-sm-20 col-20 menu-pages five">
				<a href="duvidas.php" title="Logo IDS">
					<img src="assets/images/duvidas.png" alt="Icon IDS">
					Dúvidas
				</a>
			</div>
			<div class="col-md-20 col-sm-20 col-20 menu-pages six">
				<a href="contato.php" title="Logo IDS">
					<img src="assets/images/mail.png" alt="Icon IDS">
					Contato
				</a>
			</div>
		</div>
	</div>
	<!-- !menu -->