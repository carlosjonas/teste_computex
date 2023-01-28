<?php 
	function agroupByLinesWeekday($grade)
	{
		$week_days = [];
		$lines     = [];

		// pegando os dias na ordem que eles vem
		foreach ($grade as $grade_days) {
			$week_days[] = $grade_days['dia'];
		}

		// percorrendo os dias da semana e pegando seus index e nome
		foreach ($week_days as $weekday_index => $day) {
			// percorrendo os horarios
			foreach ($grade as $grade_days) {
				// se não houver horario pro index do dia da semana o foreach pula esse index
				if (!isset($grade_days['horarios'][$weekday_index])) { continue; }

				$grade_days['horarios'][$weekday_index]['line_weekday'] = $day;
				$lines[$weekday_index][] = $grade_days['horarios'][$weekday_index];
			}
		}

		return $lines;
	}

 ?>
	<main class="mt-5">
		<section>
			<div class="container mb-5">

				<a href="index.php" class="btn btn-danger float-left">Voltar</a>

				<h1 class="mt-3 text-center">Horário Escolar</h1>
					
				<table class="table mt-3 text-center">
					<thead>
						<tr>
							<?php foreach ($jsoninfoHorario['horario'] as $key => $grade): ?>		
								<th class="id"><?=$grade["dia"] ;?></th>
							<?php endforeach ?>
						</tr>
					</thead>
					<tbody>
						<?php $lines = agroupByLinesWeekday($jsoninfoHorario['horario']) ?>
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