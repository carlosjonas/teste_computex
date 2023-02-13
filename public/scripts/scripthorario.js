	//Variável que recebe as informações do json de horário
	var horario;

	//Atribuindo mensagem de carregando
	var carregandoErro = '';
	carregandoErro += '<div class="loader text-center">';
 	carregandoErro += '<div class="loader-wheel"></div>';
 	carregandoErro += '<div class="loader-text"></div>';
	carregandoErro += '</div>';
	document.getElementById("tabela_horario").innerHTML = carregandoErro;

	function agroupByLinesWeekday(){
		// Variável que recebe os dias da semana
		var weekdays;
		// Variável que recebe as linhas
		var lines;

		forEach
	}

	function loadDocHorario() {
	  url = "/teste_computex/app/Entity/Url.php?link=horario";
	  const xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	      //Adicionando o response text ao gatilho de um botão
	      //document.getElementById("demo").innerHTML =
	      this.responseText;

	      // Atribuindo a response text a json para ficar mais semantico
	      var json = JSON.parse(this.responseText);
	      console.log(json);
	  	  console.log(json.horario);
		  dia = json.horario;

		  //Variavel que exibe a div de horario
		  var txt = '';
		  txt += '<thead class="text-center">';
		  txt += '	<tr>';
		  Object.keys(dia).forEach(function(item){
		  	console.log(item + " - " + dia[item]);

		  	horarioDia = dia[item].dia;
			txt += '	<th class="id">'+ horarioDia+'</th>';
			infoDia = dia[item].horarios;
		  });
		  txt += '	</tr>';
		  txt += '</thead>';
		  txt += '<tbody>';
		  console.log(infoDia);
			//Percorrendo o array para chegar nas informações do dia
			Object.keys(infoDia).forEach(function(item){
		  	console.log(item + " - " + infoDia[item]);

				txt += '<tr>';
				txt += '	<td class= text-center>';
				txt += '		'+ infoDia[item].disciplina+ ' <br>';
				txt += '		Prof(a)';
				txt += '		'+ infoDia[item].professor+ ' <br>';
				txt += '		De';
				txt += '		'+ infoDia[item].inicio+ '';
				txt += '		Ás';
				txt += '		'+ infoDia[item].fim+ '';
				txt += '	</td>';
				txt += '</tr>';

		  });
		  txt += '</tbody>';
		  document.getElementById("tabela_horario").innerHTML = txt;
	    }else{
	    	document.getElementById("tabela_alunos").innerHTML = "<p>Erro, atualize a página ou tente novamente mais tarde</p>";
	    }
	  }
	  xhttp.open("GET", url);
	  xhttp.send();
	}