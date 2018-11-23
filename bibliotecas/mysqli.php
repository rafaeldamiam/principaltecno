<?php

require_once ("./servicos/manipulacao.php");

function conn() {
	$dados = manipulacao();

    $cnx = mysqli_connect($dados[0], $dados[1], $dados[2], $dados[3]);

    if (!$cnx) die('Deu errado a conexão!');

    mysqli_set_charset($cnx, "utf8");
    
    return $cnx;
}