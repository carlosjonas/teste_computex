<?php

	//Incluindo autoload de classes
	require ("../vendor/autoload.php");

	use \App\Entity\Url;

	$jsoninfo = new Url();
	$jsondata = $jsoninfo->getInfoJson();
	$jsondataHorario = $jsoninfo->getInfoJsonHorario();
	$jsondataAcesso = $jsoninfo->getInfoJsonAcesso();

	//Inclundo os links necessários
	include ("../includes/header_includes.php");
	include ("../includes/modal_includes.php");
	include ("../includes/listagem_horario_aluno.php");
	include ("../includes/footer_includes.php");
 ?>