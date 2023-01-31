<?php

	//Incluindo autoload de classes
	require ("../vendor/autoload.php");

	use \App\Entity\Url;

	$jsoninfo = new Url();
	$jsondata = $jsoninfo->getInfoJson();
	$jsondataAcesso = $jsoninfo->getInfoJsonAcesso();
	$jsondataAluno = $jsoninfo->getInfoJsonAluno();

	//Inclundo os links necessários
	include ("../includes/header.php");
	include ("../includes/listagem_acessos.php");
	include ("../includes/footer.php");

 ?>