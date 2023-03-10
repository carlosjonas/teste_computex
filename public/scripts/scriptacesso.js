	// Variável que guarda os valores json de acesso
	var jsonAcesso;

	//Atribuindo mensagem de carregando
	var carregandoErro = '';
	carregandoErro += '<div class="loader text-center">';
 	carregandoErro += '<div class="loader-wheel"></div>';
 	carregandoErro += '<div class="loader-text"></div>';
	carregandoErro += '</div>';
	document.getElementById("tabela_turmas").innerHTML = carregandoErro;
	document.getElementById("tabela_alunos").innerHTML = carregandoErro;

	function loadDocJson() {
	  url = "/teste_computex/app/Entity/Url.php?link=json";
	  const xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	      //Adicionando o response text ao gatilho de um botão
	      //document.getElementById("demo").innerHTML =
	      this.responseText;
	      console.log(this.responseText);
	      // Atribuindo a response text a json para ficar mais semantico
	      var json = JSON.parse(this.responseText);
	      console.log(json);

  	      document.getElementById("nome_escola").innerHTML = json.escola;
	  	  document.getElementById("nome_escola").innerHTML = json.escola;
	  	  document.getElementById("nome_aluno").innerHTML = json.nome;
	  	  document.getElementById("nome_aluno_modal").innerHTML = json.nome;
	  	  document.getElementById("matricula").innerHTML = json.matricula;
	  	  document.getElementById("nascimento").innerHTML = json.nascimento;

	  	  console.log(json.menu);
	  }
	  xhttp.open("GET", url);
	  xhttp.send();
	}
}

	function loadDocAcesso() {
	  url = "/teste_computex/app/Entity/Url.php?link=acesso";
	  const xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	      //Adicionando o response text ao gatilho de um botão
	      //document.getElementById("demo").innerHTML =
	      this.responseText;

	      // Atribuindo a response text a json para ficar mais semantico
	      var jsonAcesso = JSON.parse(this.responseText);

		  //Variavel que exibe a tabela de turmas
		  var txt = '';
			txt += '<thead>'
			txt += '	<tr class="text-center">'
			txt += '		<th scope="col">Série</th>'
			txt += '		<th scope="col">Turma</th>'
			txt += '		<th scope="col">Ano</th>'
			txt += '		<th scope="col">Turno</th>'
			txt += '	</tr>'
			txt += '</thead>'
			txt += '<tbody>'
		  Object.keys(jsonAcesso).forEach(function(item){

						txt += '<tr>'
							txt += '<td>' + jsonAcesso[item].serie_longa + '</td>'
							txt += '<td>' + jsonAcesso[item].grau_longo + '</td>'
							txt += '<td> ' + jsonAcesso[item].ano + ''
							txt += '</td>'
							txt += '<td> ' + jsonAcesso[item].turno + ''
							txt += '</td>'
						txt += '</tr>'

		  });
			txt += '</tbody>'
		  document.getElementById("tabela_turmas").innerHTML = txt;
	    }else{
	    	document.getElementById("tabela_turmas").innerHTML = txt;
	    }

	  }
	  xhttp.open("GET", url);
	  xhttp.send();
	}

	// Variável que guarda os valores json de acesso
	var jsonAluno;


	function loadDocAluno() {
	  url = "http://localhost/teste_computex/app/Entity/Url.php?link=aluno";
	  const xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	      //Adicionando o response text ao gatilho de um botão
	      //document.getElementById("demo").innerHTML =
	      this.responseText;
	      // Atribuindo a response text a json para ficar mais semantico
	      var jsonAluno = JSON.parse(this.responseText);

		  //Variavel que exibe a tabela de alunos
		  var txt = '';
			txt += '<thead>'
			txt += '	<tr class="text-center">'
			txt += '		<th scope="col">Matricula</th>'
			txt += '		<th scope="col">Nome</th>'
			txt += '	</tr>'
			txt += '</thead>'
			txt += '<tbody>'
		  Object.keys(jsonAluno).forEach(function(item){
		  	console.log(item + " - " + jsonAluno[item]);

						txt += '<tr>'
							txt += '<td>' + jsonAluno[item].matricula + '</td>'
							txt += '<td>' + jsonAluno[item].nome + '</td>'
						txt += '</tr>'

		  });
			txt += '</tbody>'
		  document.getElementById("tabela_alunos").innerHTML = txt;
	    }else{
	    	document.getElementById("tabela_alunos").innerHTML = "<p>Erro, atualize a página ou tente novamente mais tarde</p>";
	    }
	  }
	  xhttp.open("GET", url);
	  xhttp.send();
	}
