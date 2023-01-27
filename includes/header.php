<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Teste Computex</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
	    <nav class="navbar navbar-expand-lg bg-danger">
		  <div class="container-fluid">
		    <a class="navbar-brand" href="#">
		    	<img src="public/img/logotipo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
		    </a>
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarNav">
		      <ul class="navbar-nav">
		      	<li class="nav-item">
		          <a class="nav-link" href="#"><?= $jsoninfo['escola'];?></a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><?= $jsoninfo['nome'];?></a>		        	
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="logout.php">Sair</a>
		        </li>
		      </ul> 
		    </div>
		  </div>
		</nav>
