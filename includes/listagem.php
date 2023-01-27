	<main class="mt-5">
		<section>
			<div class="container text-center">
				<div class="row row-cols-3">
					<?php foreach ($jsoninfo['menu'] as $menu): ?>
						<div class="col-4 mb-3">
							<a href="<?= $menu['link']; ?>">
								<div class="card" style="width: 18rem;">
								  <img src="public/img/icones/<?= $menu['icone']; ?>.svg" class="card-img-top" alt="logo">
								  <div class="card-body">
								    <h5 class="card-title"><?= $menu['titulo']; ?></h5>
								  </div>
								</div>
							</a>
						</div>

					<?php endforeach ?>
				</div>
			</div>
		</section>
	</main>