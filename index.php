<?php

	//Incluindo autoload de classes
	require __DIR__.("/vendor/autoload.php");

	use \App\Entity\Url;

	$jsoninfo = new Url();
	$jsoninfo->__construct();
	$jsondata = $jsoninfo->getInfoJson();

	//Inclundo os links necessários
	include __DIR__.("/includes/header.php");
	include __DIR__.("/includes/modal.php");
	include __DIR__.("/includes/listagem.php");
	include __DIR__.("/includes/footer.php");

?>
