	// Variável que guarda a url com o json
	var url;
	// Variável que guarda os valores json
	var json;
	// Variável que guarda as opções do menu
	var menu;
	// Variável que guarda o domínio
	//var dominio = "http://localhost";

	function loadDoc() {
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
		  menu = json.menu;

		  //Variavel que exibe a div de menus
		  var txt = '';

		  Object.keys(menu).forEach(function(item){
		  	console.log(item + " - " + menu[item]);

		  	txt += '<div class="col-4 mb-3">';
			txt += '	<a class="menu_link" href="views/' + menu[item].link + ' ">';
			//txt += if (typeof menu[item].link == "undefined"){ "#" }else{menu[item].link};
			//txt += ' ">';
			txt += '		<div class="card" style="width: 18rem;">'
			txt += '			<img src="public/img/icones/' + menu[item].icone + '.svg" class="card-img-top" alt="logo">'
			txt += '			<div class="card-body">'
			txt += '				<h5 class="card-title">' + menu[item].titulo + '</h5>'
			txt += '			</div>';
			txt += '		</div>'
			txt += '	</a>';
			txt += '</div>';

		  });
		  document.getElementById("menu_link").innerHTML = txt;
	    }
	  }
	  xhttp.open("GET", url);
	  xhttp.send();
	}
