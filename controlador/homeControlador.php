<?php

require_once "modelo/produtoModelo.php";

/** anon */
function index() {
    $dados["produtos"] = pegar10Produtos();
    exibir("home/visualizar", $dados);
}
?>