	// Variável que guarda os valores json de acesso
	var jsonAcesso;


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
	    }

	  }
	  xhttp.open("GET", url);
	  xhttp.send();
	}
