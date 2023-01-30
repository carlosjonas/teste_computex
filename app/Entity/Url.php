<?php 

namespace App\Entity;

class Url{

	/**
	 * String de domínio para a url
	 */
	public $dominio;

	/**
	 * String de domínio de acesso para a url
	 */
	public $acesso;

	/**
	 * String de domínio de horario para a url
	 */
	public $horario;

	/**
	 * String de domínio de aluno para a url
	 */
	public $aluno;

	/**
	 * String de domínio de aluno para a url
	 */
	private $erros= [];
	
	/**
	 * Método que traz o json para o site
	 * @return array
	 */
	public function __construct(){
		$this->dominio = 'http://camerascomputex.ddns.net:8080';
	}

	/**
	 * Método que traz o json para o site
	 * @return array
	 */
	public function getInfoJson(){
		$url = "{$this->dominio}/escola/mobile_login.php?matricula=2011004&senha=99999999&token=X&so=ios";
		try {
			$jsonString = file_get_contents($url);
			return $jsoninfo = json_decode($jsonString,true);
		} catch (Exception $e) {
			echo '
				<div class="modal" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
						  <div class="modal-header">
						    <h5 class="modal-title">Erro de página</h5>
						    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						  </div>
						  <div class="modal-body">
						    <p>Ocorreu algum erro com a página, tente acessar novamente mais tarde!</p>
						  </div>
						  <div class="modal-footer">
						    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						  </div>
						</div>
					</div>
				</div>
			';
			header ("location: http://camerascomputex.ddns.net:8080/escola/index2.php");
			$erros['titulo'] = ("Error: " .$e->getMessage());
			$_SESSION['erro'] = $erros['titulo'];
		}
	}

	/**
	 * Método que traz o json de horarios para o site
	 * @return array
	 */
	public function getInfoJsonHorario(){
		$url = "{$this->dominio}/escola/json_horario_aluno.php?matricula=2011004&senha=99999999&ano=20211";
		try {
			$jsonString = file_get_contents($url);
			return $jsoninfo = json_decode($jsonString,true);
		} catch (Exception $e) {
			echo '
				<div class="modal" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
						  <div class="modal-header">
						    <h5 class="modal-title">Erro de página</h5>
						    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						  </div>
						  <div class="modal-body">
						    <p>Ocorreu algum erro com a página, tente acessar novamente mais tarde!</p>
						  </div>
						  <div class="modal-footer">
						    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						  </div>
						</div>
					</div>
				</div>
			';
			header ("location: index.php");
			$erros['titulo'] = ("Error: " .$e->getMessage());
		}
	}


	/**
	 * Método que traz o json de acessos para o site
	 * @return array
	 */
	public function getInfoJsonAcesso(){
		$url = "{$this->dominio}/escola/ws_controller.php?action=getTurmas&ano=20211";
		try {
			$jsonString = file_get_contents($url);
			return $jsoninfo = json_decode($jsonString,true);
		} catch (Exception $e) {
			echo '
				<div class="modal" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
						  <div class="modal-header">
						    <h5 class="modal-title">Erro de página</h5>
						    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						  </div>
						  <div class="modal-body">
						    <p>Ocorreu algum erro com a página, tente acessar novamente mais tarde!</p>
						  </div>
						  <div class="modal-footer">
						    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						  </div>
						</div>
					</div>
				</div>
			';
			header ("location: index.php");
			$erros['titulo'] = ("Error: " .$e->getMessage());
		}
	}

	/**
	 * Método que traz o json de alunos para o site
	 * @return array
	 */
	public function getInfoJsonAluno(){
		$url = "{$this->dominio}/escola/ws_controller.php?action=getAlunosTurma&ano=20211&escola=1&grau_serie=15&turno=M&turma=1&status=C";
		try {
			$jsonString = file_get_contents($url);
			return $jsoninfo = json_decode($jsonString,true);
		} catch (Exception $e) {
			echo '
				<div class="modal" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
						  <div class="modal-header">
						    <h5 class="modal-title">Erro de página</h5>
						    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						  </div>
						  <div class="modal-body">
						    <p>Ocorreu algum erro com a página, tente acessar novamente mais tarde!</p>
						  </div>
						  <div class="modal-footer">
						    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						  </div>
						</div>
					</div>
				</div>
			';
			header ("location: index.php");
			$erros['titulo'] = ("Error: " .$e->getMessage());
		}
	}

	/**
	 * Método que traz os erros para o site
	 * @return array
	 */
	public function getError(){
		return $erros = [];		
	}
	
}
 ?>