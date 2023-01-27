	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-xl">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h1 class="modal-title fs-5" id="exampleModalLabel">Perfil do Aluno</h1>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div>
	      <div class="modal-body">

	      	<!--Área do Modal-->
	      	<div class="container">

	      		<!--Container de Ano escolar-->
		      	<div class="row row-color">
          	<div class="container text-center bg-danger">
							  <div class="row">
							    <div class="col">
							      Lotação: Escola 
							    </div>
							    <div class="col">
							      Esc:01
							    </div>
							    <div class="col">
							      Ensino Fundamental: 2° Ano
							    </div>
							    <div class="col">
							      Turma: 01
							    </div>
							    <div class="col">
							      Turno: Manhã
							    </div>
							  </div>
							</div>
          </div>
          <!--Fim Container de Ano escolar-->

          <!--Container de Dados-->
          <div class="container text-center">
						  <div class="row">
						    <div class="col">
						      <img src="public/img/usuario.jpg">
						    </div>
						  </div>
						  <div class="row mt-3">
						    <div class="col">
						      <strong>Nome:</strong> <?= $jsoninfo['nome'];?>
						    </div>
						    <div class="col">
						      <strong>Email:</strong> arthurm@gmail.com
						    </div>
						  </div>
						  <div class="row mt-3">
						    <div class="col">
						      <strong>Matrícula:</strong> <?= $jsoninfo['matricula'];?>
						    </div>
						    <div class="col">
						      <strong>Nascimento:</strong> <?= $jsoninfo['nascimento'];?>
						    </div>
						    <div class="col">
						      <strong>Sexo:</strong> M
						    </div>
						  </div>
						</div>
						<!--Fim Container de Dados-->

						<!--Container de Endereço-->
		      	<div class="row row-color mt-3">
          	<div class="container bg-danger">
							  <div class="row">
							    <div class="col">
							      Endereço
							    </div>
							  </div>
							</div>
          </div>
          <!--Fim Container de Endereço-->

          <!--Container de Dados de Endereço-->
          <div class="container text-center">
						  <div class="row mt-3">
						    <div class="col">
						      <strong>CEP:</strong> 60311-220
						    </div>
						    <div class="col">
						      <strong>UF:</strong> Ceará
						    </div>
						    <div class="col">
						      <strong>Cidade:</strong> Fortaleza
						    </div>
						    <div class="col">
						      <strong>Bairro:</strong> Cristo Redentor
						    </div>
						  </div>
						  <div class="row mt-3">
						    <div class="col">
						      <strong>Matrícula:</strong> <?= $jsoninfo['matricula'];?>
						    </div>
						    <div class="col">
						      <strong>Nascimento:</strong> <?= $jsoninfo['nascimento'];?>
						    </div>
						    <div class="col">
						      <strong>Sexo:</strong> M
						    </div>
						  </div>
						</div>
						<!--Fim Container de Dados de Endereço-->

					<!--Fim Área Modal-->
        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!--Ínicio Container Body-->
	<div class="container">