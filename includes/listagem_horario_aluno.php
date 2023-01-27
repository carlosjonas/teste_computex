	<main class="mt-5">
		<section>
			<div class="container text-center">
					<?php foreach ($jsoninfoHorario['horario'] as $horario): ?>
						<table class="table table-striped">
							<thead>
								<tr>
								<th scope="col"><?= $horario['dia'];?></th>
								<th scope="col">First</th>
								<th scope="col">Last</th>
								<th scope="col">Handle</th>
								</tr>
							</thead>
							<tbody>
								<tr>
								<th scope="row">1</th>
								<td>Mark</td>
								<td>Mark</td>
								<td>Mark</td>
								</tr>
							</tbody>
						</table>
					<?php endforeach ?>
			</div>
		</section>
	</main>