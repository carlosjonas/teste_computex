<?php

	//Incluindo autoload de classes
	require ("../vendor/autoload.php");

	use \App\Entity\Url;

	$url  = new Url();
	$erros = $url->getError();

	//Inclundo os links necessários
	include ("../includes/header_erro.php");

?>

	<div class="container">

		<a href="index.php" class="btn btn-danger mt-3">Voltar</a>

		<h1 class="mt-3 text-center">Listagem de erros</h1>

		<table class="mt-5 table table-danger table-striped table-bordered minhaTabela">
		  <thead>
		    <tr class="text-center">
		      <th scope="col">Erros</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php foreach ($erros as $erro): ?>
		    	<tr>
			        <td><?= $erro['titulo'];?></td>
		    	</tr>
			<?php endforeach ?>
		  </tbody>
		</table>

		<?php $url->clearError(); ?>

	</div>

<?php
	include ("../includes/footer.php");

 ?>