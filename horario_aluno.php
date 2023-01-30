<?php 

	//Incluindo autoload de classes
	require __DIR__.("/vendor/autoload.php");

	use \App\Entity\Url;

	$jsoninfo = new Url();
	$jsondata = $jsoninfo->getInfoJson();
	$jsondataHorario = $jsoninfo->getInfoJsonHorario();
	$jsondataAcesso = $jsoninfo->getInfoJsonAcesso();


	//Inclundo os links necessários
	//include __DIR__.("/url.php");
	include __DIR__.("/includes/header.php");
	include __DIR__.("/includes/listagem_horario_aluno.php");
	include __DIR__.("/includes/footer.php");
 ?>