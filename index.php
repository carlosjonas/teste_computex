<?php 
	$url = "http://camerascomputex.ddns.net:8080/escola/mobile_login.php?matricula=2011004&senha=99999999&token=X&so=ios";
	$jsonString = file_get_contents($url);
	//echo "<pre>"; print_r($jsonString); echo "</pre>"; 
	$jsoninfo = json_decode($jsonString,true);
	//echo "<pre>"; print_r($jsoninfo); echo "</pre>";

	include __DIR__.("/includes/header.php");
	include __DIR__.("/includes/modal.php");
	include __DIR__.("/includes/footer.php");
?>


		
			

