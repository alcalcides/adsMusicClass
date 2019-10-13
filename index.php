<?php 
	//Definição da página default
	define("defaultPage", "home");	
	
	//ler entrada url
	if (isset($_GET["page"])) {
		$solicitacao = substr($_GET["page"], 0);
		$caminho = "_views/" . $solicitacao . ".php";
		$out = $solicitacao;
	}
	//caso não haja entrada alguma na barra de endereço, segue
	else {
		$caminho = "_views/" . defaultPage . ".php";
		$out = defaultPage;
	}

	//direcionar para o arquivo relevante
	header("Location: " . $out);	
?>