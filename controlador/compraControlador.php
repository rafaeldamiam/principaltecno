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

function metodoPagamento(){
    if (ehPost()) {
        extract($_POST);
        $_SESSION["metodo"] = $_POST["pagamento"]; 
    }else{
        redirecionar("compra/");
    }
}

?>