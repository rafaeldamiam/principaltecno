<?php
function manipulacao(){
	$arq = fopen("servicos\manipulacao.txt", "r");
	$dados = array();
	while (!feof($arq)) {
		$dados[] = trim(fgets($arq));
	}

	return $dados;
}

?>