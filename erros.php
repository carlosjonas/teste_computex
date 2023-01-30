<?php 

	//Incluindo autoload de classes
	require __DIR__.("/vendor/autoload.php");

	use \App\Entity\Url;
	
	$erro = new Url();
	$jsondata = $erro->getInfoJson();
	$erros = $erro->getError();


	//Inclundo os links necessários
	include __DIR__.("/includes/header.php");
	
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
		  	<?php  echo "<pre>"; print_r($erros); echo "</pre>"?>
		  	<?php foreach ($erros as $erro): ?>
		    	<tr>
			        <td><?= $erro['titulo'];?></td>
		    	</tr>
			<?php endforeach ?>
		  </tbody>  	
		</table>

	</div>

<?php	
	include __DIR__.("/includes/footer.php");

 ?>