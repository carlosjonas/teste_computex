	function loadDocHorario() {
	  url = "http://localhost/teste_computex/app/Entity/Url.php?link=horario";
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
	  	  console.log(json.horario);
		  dia = json.horario;

		  //Variavel que exibe a div de horario
		  var txt = '';

		  Object.keys(dia).forEach(function(item){
		  	console.log(item + " - " + dia[item]);

		  	txt += '<thead class="text-center">';
			txt += '			<tr>';
			txt += '					<th class="id">'+ dia+'dia</th>';
			txt += '			</tr>';
			txt += '		</thead>';
			txt += '		<tbody>';
			txt += '				<tr>';
			txt += '						<td >';
			txt += '							disciplinas <br>';
			txt += '							Prof(a)';
			txt += '								professor <br>';
			txt += '							De';
			txt += '								inicio';
			txt += '							Ás';
			txt += '								fim';
			txt += '						</td>';
			txt += '				</tr>';
			txt += '		</tbody>';

		  });
		  document.getElementById("tabela_horario").innerHTML = txt;
	    }
	  }
	  xhttp.open("GET", url);
	  xhttp.send();
	}