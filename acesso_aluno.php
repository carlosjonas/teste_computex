<?php 

	//Incluindo autoload de classes
	require __DIR__.("/vendor/autoload.php");

	use\App\Entity\Url;
	
	//Inclundo os links necessários
	include __DIR__.("/url.php");
	include __DIR__.("/includes/header.php");
	include __DIR__.("/includes/listagem_acessos.php");
	include __DIR__.("/includes/footer.php");

 ?>