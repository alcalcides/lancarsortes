<?php 
	//Definição da página default
	define("defaultPage", "home");	
	
	//ler entrada url
	if (isset($_GET["page"])) {
	    $order = "_views/" . $_GET["page"] . ".php";
	}
	else {
	    $order = "_views/" . defaultPage . ".php";
	}

	//direcionar para o arquivo relevante
	header("Location: " . $order);
?>
