// Guardando algumas partes do código em php caso precise mais alguma alteração


// foreach de card de listagem.php
<?php foreach ($jsondata['menu'] as $menu): ?>
						<div class="col-4 mb-3">
							<a class="menu_link" href="
							">
								<div class="card" style="width: 18rem;">
								  <img src="public/img/icones/<?= $menu['icone']; ?>.svg" class="card-img-top" alt="logo">
								  <div class="card-body">
								    <h5 class="card-title"><?= $menu['titulo']; ?></h5>
								  </div>
								</div>
							</a>
						</div>

					<?php endforeach ?>

// foreach de tabela de horarios
<thead class="text-center">
						<tr>
							<?php foreach ($jsondataHorario['horario'] as $key => $grade): ?>
								<th class="id"><?=$grade["dia"] ;?></th>
							<?php endforeach ?>
						</tr>
					</thead>
					<tbody>
						<?php
							//$url= new Url();
							$lines= $jsoninfo->agroupByLinesWeekday($jsondataHorario['horario']);
						?>

						<?php foreach ($lines as $line): ?>
							<tr>
								<?php foreach ($line as $column): ?>
									<td >
										<?=$column["disciplina"] ;?> <br>
										Prof(a)
											<?=$column["professor"] ;?> <br>
										De
											<?php
												$column['inicio'] = substr_replace($column['inicio'], ':', 2, 0);
												echo $column['inicio'];
											?>
										Ás
											<?php
												$column['fim'] = substr_replace($column['fim'], ':', 2, 0);
												echo $column['fim'];
											?> <br>

									</td>

								<?php endforeach ?>
							</tr>
						<?php endforeach ?>

					</tbody>

//foreach de tabela de acessos
<thead>
				    <tr class="text-center">
				      <th scope="col">Série</th>
				      <th scope="col">Turma</th>
				      <th scope="col">Ano</th>
				      <th scope="col">Turno</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php foreach ($jsondataAcesso as $acesso): ?>
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

//Foreach de listagem de alunos
				<thead>
				    <tr class="text-center">
				      <th scope="col">Matrícula</th>
				      <th scope="col">Nome</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php foreach ($jsondataAluno as $aluno): ?>
				    	<tr>
					        <td><?= $aluno['matricula'];?></td>
					        <td><?= $aluno['nome'];?></td>
				    	</tr>
					<?php endforeach ?>
				  </tbody>