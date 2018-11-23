<?php
function manipulacao(){
	$arq = fopen("D:\wamp64\www\principaltecno\servicos\manipulacao.txt", "r");
	$dados = array();
	while (!feof($arq)) {
		$dados[] = trim(fgets($arq));
	}

	return $dados;
}

?>