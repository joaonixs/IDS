<?php 
	// definindo valores padrões
	define("URL_BASE", 'http://localhost/IDS/');

	// página atual
	$pagina	= basename($_SERVER['SCRIPT_NAME']);

	// data padrão
	date_default_timezone_set("America/Sao_paulo");	

	// conexão
	$con 	= mysqli_connect('localhost', 'root', 'root');
	$db 	= mysqli_select_db($con, 'ids');

	// linguagem padrão
	mysqli_set_charset($con, "utf8");
?>