
	// Variável que guarda o domínio do site
	var dominio;
	// Variável que guarda a url com o json
	var url;
	// Variável que guarda os valores json
	var json;

	/*/ Classe que vai gerenciar as requisições do JSON
	class Url{
		constructor(dominio){
			this.dominio = "http://camerascomputex.ddns.net:8080";
		}

		/*function getinfoJson(){
			try{
				url = this.dominio + "/escola/mobile_login.php?matricula=2011004&senha=99999999&token=X&so=ios";
				url = JSON.parse(url);
				console.log(url);

			}catch{
				console.log("deu errado");
			}
		}
	}*/
	url = "http://localhost/teste_computex/app/Entity/Url.php?link=json";
	function loadDoc() {
	  const xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	      document.getElementById("demo").innerHTML =
	      this.responseText;
	      console.log(this.responseText);
	      var json = JSON.parse(this.responseText);
	      console.log(json);
	  	  document.getElementById("arrays").innerHTML = json;
	  	  document.getElementById("nome_escola").innerHTML = json.escola;
	  	  document.getElementById("nome_aluno").innerHTML = json.nome;
	    }
	  }
	  xhttp.open("GET", url);
	  xhttp.send();
	}
	//url = JSON.parse(url);
	//json = URL.getinfoJson();
