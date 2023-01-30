	<main class="mt-5">
		<section>
			<!--Card que mostra as opções do Menu-->
			<div class="container text-center">
				<div class="row row-cols-3">

					<?php foreach ($jsondata['menu'] as $menu): ?>
						<div class="col-4 mb-3">
							<a href="
								<?php 
									if (!isset($menu['link'])) {
										header("location: index.php");
									} 
								?>
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
				</div>
			</div>
		</section>
	</main>