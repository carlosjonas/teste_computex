
 	<main>
		<section>
			<div class="container mb-5">
				<a href="../index.php" class="btn btn-danger mt-3">Voltar</a>

				<?php  //echo "<pre>"; print_r($jsoninfoAcesso); echo "</pre>"; ?>
				<h1 class="mt-3 text-center">Listagem de Turmas</h1>

				<!--Tabela de listagem de turmas-->
				<table class="mt-5 table table-danger table-striped table-bordered minhaTabela" id="tabela_turmas">

				</table>

				<h1 class="mt-3 text-center">Listagem de Alunos</h1>

				<!--Tabela com listagem de alunos-->
				<table class="mt-5 table table-danger table-striped table-bordered minhaTabela" id="tabela_alunos">

				</table>

				<!--Botão que gera o PDF-->
				<p class="mt-3">Clique aqui para gerar a lista de alunos: </p>
				<a class="btn btn-danger" href="../includes/gerarPDF.php">Gerar PDF !</a>

			</div>
		</section>
	</main>

	<script type="text/javascript" src="../public/scripts/scriptacesso.js"></script>
	<script type="text/javascript">
		loadDocAcesso();
		loadDocAluno();
	</script>