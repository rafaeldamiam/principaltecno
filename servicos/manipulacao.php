<?php
function manipulacao(){
	$arq = fopen("/home/www/principaltecno.onlinewebshop.net/servicos/manipulacao.txt", "r");
	$dados = array();
	while (!feof($arq)) {
		$dados[] = trim(fgets($arq));
	}

	return $dados;
}

?>