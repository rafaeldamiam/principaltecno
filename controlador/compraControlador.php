<?php
require_once "modelo/produtoModelo.php";
/** anon */
function index() {
	    $produtosCarrinhoId = array();
        foreach ($_SESSION["carrinho"] as $produtoID) {
            $produtosCarrinhoId[] = pegarProdutoPorId($produtoID["id"]);
        }
        $dados["produtos"] = $produtosCarrinhoId;

        //pega e manda quantidade de produtos
        $produtosCarrinhoQuant = array();
        foreach ($_SESSION["carrinho"] as $produtoQuant) {
            $produtosCarrinhoQuant[] = $produtoQuant["quantidade"];
        }
        $dados["quant"] = $produtosCarrinhoQuant;

        exibir("compra/formulario", $dados);

}



?>