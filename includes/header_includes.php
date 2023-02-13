<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Teste Computex</title>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!--DataTables-->
    <link href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
    <!--Página de scripts.js-->
  	<script type="text/javascript" src="../public/scripts/script.js"></script>

  	<!--Scripts de funções js-->
    <script>
    	//Função que traz as opções de menu
    	loadDoc();

    </script>
  </head>
  <body>
  		<!--Menu-->
	    <nav class="navbar navbar-expand-lg bg-danger">
				<div class="container-fluid">
				  <a class="navbar-brand" href="index.php"><img src="../public/img/logotipo.png" alt="Logo" width="45" height="45" class="d-inline-block align-text-top"></a>
				  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>
				  <div class="collapse navbar-collapse" id="navbarNav">
				    <ul class="navbar-nav">
				      <li class="nav-item">
				        <a class="nav-link link-menu" aria-current="page" href="index.php" id="nome_escola"></a>
				      </li>
				      <li class="nav-item link-menu">
				        <a class="nav-link" aria-current="page" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" id="nome_aluno"></a>
				      </li>
				      <li class="nav-item link-menu">
				        <a class="nav-link" href="./views/logout.php">Sair</a>
				      </li>
				    </ul>
				  </div>
				</div>
				</nav>
		<div class="container">
