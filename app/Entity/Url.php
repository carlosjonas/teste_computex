<?php

namespace App\Entity;

class Url{

	/**
	 * String de domínio para a url
	 */
	public $dominio;

	/**
	 * Array de erros para registrar em uma tabela
	 */
	public $erros= [];

	/**
	 * Método construtor que traz o dominio para o site
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
		try {
			$url = "{$this->dominio}/escola/mobile_login.php?matricula=2011004&senha=99999999&token=X&so=ios";
			$jsonString = file_get_contents($url);

			// verifica se há conteudo, se não houver uma exception é criada
			if (!$jsonString) { throw new \Exception("não foi possivel retornar os dados"); }

			return $jsoninfo = json_decode($jsonString,true);
		} catch (\Exception $e) {

			$this->setError(['titulo' => "Error: " . $e->getMessage()]);

			header ("location: ./views/erros.php");
		}
	}

	/**
	 * Método que traz o json de horarios para o site
	 * @return array
	 */
	public function getInfoJsonHorario(){
		try {
			$url = "{$this->dominio}/escola/json_horario_aluno.php?matricula=2011004&senha=99999999&ano=20211";

			$jsonString = file_get_contents($url);
			// verifica se há conteudo, se não houver uma exception é criada
			if (!$jsonString) { throw new \Exception("não foi possivel retornar os dados"); }

			return $jsoninfo = json_decode($jsonString,true);
		} catch (\Exception $e) {

			$this->setError(['titulo' => "Error: " . $e->getMessage()]);

			header ("location: ./views/erros.php");
		}
	}


	/**
	 * Método que traz o json de acessos para o site
	 * @return array
	 */
	public function getInfoJsonAcesso(){
		try {
			$url = "{$this->dominio}/escola/ws_controller.php?action=getTurmas&ano=20211";
			$jsonString = file_get_contents($url);
			// verifica se há conteudo, se não houver uma exception é criada
			if (!$jsonString) { throw new \Exception("não foi possivel retornar os dados"); }

			return $jsoninfo = json_decode($jsonString,true);
		} catch (\Exception $e) {

			$this->setError(['titulo' => "Error: " . $e->getMessage()]);

			header ("location: ./views/erros.php");
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
			// verifica se há conteudo, se não houver uma exception é criada
			if (!$jsonString) { throw new \Exception("não foi possivel retornar os dados"); }

			return $jsoninfo = json_decode($jsonString,true);
		} catch (\Exception $e) {

			$this->setError(['titulo' => "Error: " . $e->getMessage()]);

			header ("location: ./views/erros.php");
		}
	}

	/**
	 * Método que traz os erros para o site
	 * @return array
	 */
	public function getError(){
		@session_start();
		return @$_SESSION['erros'] ?? [];
	}

	/**
	 * Método que adiciona um erro a lista
	 * @return null
	 */
	public function setError($error){
		@session_start();
		$_SESSION['erros'][] = $error;
	}

	/**
	 * Método que limpa os erros
	 * @return null
	 */
	public function clearError(){
		@session_start();
		unset($_SESSION['erros']);
	}

	/**
	 * Método para agrupar as linhas por dia
	 * @param string $grade
	 * @return array
	 */
	public function agroupByLinesWeekday($grade)
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
}
 ?>