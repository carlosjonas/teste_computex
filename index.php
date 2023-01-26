<?php 
	$url = "http://camerascomputex.ddns.net:8080/escola/mobile_login.php?matricula=2011004&senha=99999999&token=X&so=ios";
	$jsonString = file_get_contents($url);
	//echo "<pre>"; print_r($jsonString); echo "</pre>"; 
	$jsoninfo = json_decode($jsonString,true);
	echo "<pre>"; print_r($jsoninfo); echo "</pre>";
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Teste Computex</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
	    <nav class="navbar navbar-expand-lg bg-light">
		  <div class="container-fluid">
		    <a class="navbar-brand" href="#">
		    	<img src="<?= $jsoninfo['logo_escola'];?>" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
		    </a>
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarNav">
		      <ul class="navbar-nav">
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><?= $jsoninfo['nome'];?></a>

		        <!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-lg">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h1 class="modal-title fs-5" id="exampleModalLabel">Perfil</h1>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>
				      <div class="modal-body">
				      	<!--Aria do Modal-->
				      	<div class="row row-color">
                                <h4>
                        			Lotação: Escola  Esc:01  Ensino Fundamental: 2ºAno  Turma:01  Turno: Manhã           
                                </h4>
                        </div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
				      </div>
				    </div>
				  </div>
					</div>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="logout.php">Sair</a>
		        </li>
		      </ul>
		    </div>
		  </div>
		</nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>