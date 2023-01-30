<?php 

	//Incluindo autoload de classes
	require __DIR__.("/vendor/autoload.php");

	use \App\Entity\Url;
	
	
	$erro = Url::getError();

	//Inclundo os links necessários
	include __DIR__.("/includes/header.php");
	
?>

	<div class="container">

		<a href="index.php" class="btn btn-danger mt-3">Voltar</a>

		<?php echo "<pre>"; print_r($erro); echo "</pre>" ?>
	</div>

<?php	
	include __DIR__.("/includes/footer.php");

 ?>