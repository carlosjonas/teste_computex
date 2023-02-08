
	// Variável que guarda o domínio do site
	var dominio;
	// Variável que guarda a url com o json
	var url;

	// Classe que vai gerenciar as requisições do JSON
	class Url{
		constructor(dominio){
			this.dominio = "http://camerascomputex.ddns.net:8080";
		}

		getinfoJson(){
			try{
				url = this.dominio + "/escola/mobile_login.php?matricula=2011004&senha=99999999&token=X&so=ios";
				url = JSON.parse(url);
				console.log(url);

			}catch{
				console.log("deu errado");
			}
		}
	}
	getinfoJson();