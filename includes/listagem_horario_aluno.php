	<main class="mt-5">
		<section>
			<div class="container mb-5">

				<a href="../index.php" class="btn btn-danger float-left">Voltar</a>

				<h1 class="mt-3 text-center">Horário Escolar</h1>

				<!--Tabela contendo o horário dos alunos-->
				<table class="table mt-3 table table-danger table-striped table-bordered" id="tabela_horario">

				</table>

				<ul class="list-group" id="listagem_horario">
				</ul>

			</div>
		</section>
	</main>

	<script type="text/javascript" src="../public/scripts/scripthorario.js"></script>
	<script type="text/javascript">
		loadDocHorario();
	</script>