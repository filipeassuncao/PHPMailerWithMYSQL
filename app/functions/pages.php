<?php

function load() {
	
	$page = filter_input(INPUT_GET,'page',FILTER_SANITIZE_STRING);

	//Page é nulo? vai pra home
	$page = (!$page) ? 'pages/home.php' : "pages/{$page}.php";

	//Se page nao existir, apresenta erro
	if(!file_exists($page)) {
		throw new \Exception("opa, algo de errado aconteceu");
	}

	return $page;
}
?>