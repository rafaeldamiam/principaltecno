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

function fazendoDesconto(){
      $desconto = $_SESSION['cupom'][0]["Desconto"];
      $vlrdesconto = ($desconto*$_SESSION['valorTotal'])/100;    
      $valordeCompra = $_SESSION['valorTotal']-$vlrdesconto;
      $_SESSION['segurança'] = 1;
      return $valordeCompra;

}

function cancelarCompra(){
	unset($_SESSION["cupom"]);
        unset($_SESSION["valorTotal"]);
	unset($_SESSION["metodo"]);
        redirecionar("./home/");
}

?>