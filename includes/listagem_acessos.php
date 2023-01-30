
 	<main>
		<section>
			<div class="container mb-5">
				<a href="index.php" class="btn btn-danger mt-3">Voltar</a>

				<?php  //echo "<pre>"; print_r($jsoninfoAcesso); echo "</pre>"; ?>
				<h1 class="mt-3 text-center">Listagem de Turmas</h1>

				<table class="mt-3 table table-danger table-striped table-bordered">
					
				  <thead>
				    <tr class="text-center">
				      <th scope="col">Série</th>
				      <th scope="col">Turma</th>
				      <th scope="col">Ano</th>
				      <th scope="col">Turno</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php foreach ($jsoninfoAcesso as $acesso): ?>
						<tr>
							<td><?=$acesso['serie_longa'];?></td>
							<td><?=$acesso['grau_longo'];?></td>
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

				<h1 class="mt-3 text-center">Listagem de Alunos</h1>

				<table class="table table-danger table-striped table-bordered">
				  <thead>
				    <tr class="text-center">
				      <th scope="col">Matrícula</th>
				      <th scope="col">Nome</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php foreach ($jsoninfoAluno as $aluno): ?>
				    	<tr>
					        <td><?= $aluno['matricula'];?></td>
					        <td><?= $aluno['nome'];?></td>
				    	</tr>
					<?php endforeach ?>
				  </tbody>  	
				</table>

				<p>Clique aqui para gerar a lista de alunos: </p>
				<button onclick="gerarPdf()">Gerar PDF</button>

			</div>
		</section>
	</main>