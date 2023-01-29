	<main>
		<section>
			<div class="container mb-5">
				<a href="index.php" class="btn btn-danger mt-3">Voltar</a>

				<?php  echo "<pre>"; print_r($jsoninfoAcesso); echo "</pre>"; ?>
				<h1 class="mt-3 text-center">Listagem de Turmas</h1>

				<table class="table">
					
					  <thead>
					    <tr>
					      <th scope="col">Série</th>
					      <th scope="col">Turma</th>
					      <th scope="col">Ano</th>
					      <th scope="col">Turno</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php foreach ($jsoninfoAcesso as $acesso): ?>
					    	<tr>
					    	
						        <td>
						        	<?= $acesso['serie_longa'];?>
						         		
						         </td>
						        <td><?= $acesso['grau_longo'];?></td>
						        <td>
						        	<?php 
												$acesso['ano'] = substr_replace($acesso['ano'], '.', 4, 0);
												echo $acesso['ano'];
									?>		
								</td>
						        <td>
						        	<?php
						        		switch ($acesso['turno']):
										    case "M":
										        echo "Manhã";
										        break;
										    case "T":
										        echo "Tarde";
										        break;
										    case "N":
										        echo "Noite";
										        break;
										    default:
										        echo "Erro";
										endswitch;
						        	?>
						        		
						        </td>
					    	</tr>
						<?php endforeach ?>
					  </tbody>
				  	
				</table>
			</div>
		</section>
	</main>