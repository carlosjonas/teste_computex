<?php 
	//Url do menu
	$url = "http://camerascomputex.ddns.net:8080/escola/mobile_login.php?matricula=2011004&senha=99999999&token=X&so=ios";
	$jsonString = file_get_contents($url);
	//echo "<pre>"; print_r($jsonString); echo "</pre>"; 
	$jsoninfo = json_decode($jsonString,true);
	//echo "<pre>"; print_r($jsoninfo); echo "</pre>";

	//Url do horário
	$urlhorario = "http://camerascomputex.ddns.net:8080/escola/json_horario_aluno.php?matricula=2011004&senha=99999999&ano=20211";
	$jsonStringHorario = file_get_contents($urlhorario);
	echo "<pre>"; print_r($jsonStringHorario); echo "</pre>"; 
	$jsoninfoHorario = json_decode($jsonStringHorario,true);
	echo "<pre>"; print_r($jsoninfoHorario); echo "</pre>";
 ?>