	<main>
		<section>
			<div class="container mb-5">
				<a href="index.php" class="btn btn-danger mt-3">Voltar</a>

				<?php  echo "<pre>"; print_r($jsoninfoAcesso); echo "</pre>"; ?>
				<h1 class="mt-3 text-center">Listagem de Turmas</h1>


				<ol class="list-group list-group-numbered mt-3">
					<?php foreach ($jsoninfoAcesso as $acesso): ?>
						<li class="list-group-item d-flex justify-content-between align-items-start">
						    <div class="ms-2 me-auto">
						      <div class="fw-bold">Turma: <?= $acesso['grau_longo'];?></div>
						      Série: <?= $acesso['serie_longa'];?>
						    </div>
						    <span class="badge bg-primary rounded-pill">Turno: <?= $acesso['turno'];?></span>
						</li>
					<?php endforeach ?>
				</ol>
			</div>
		</section>
	</main>