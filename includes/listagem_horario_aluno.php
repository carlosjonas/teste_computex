	<main class="mt-5">
		<section>
			<div class="container mb-5">

				<a href="../index.php" class="btn btn-danger float-left">Voltar</a>

				<h1 class="mt-3 text-center">Horário Escolar</h1>

				<!--Tabela contendo o horário dos alunos-->
				<table class="table mt-3 table table-danger table-striped table-bordered">
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

			</div>
		</section>
	</main>