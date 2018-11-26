<?php
require_once "modelo/pedidoModelo.php";
require_once "modelo/produtoModelo.php";

/** Admin */
function index($id) {
	$dados["pedidos"] = pegarPedidosPorId($id);
	
	if(!empty($dados["pedidos"])){
		exibir("pedido/listar", $dados);
	}else{
		exibir("pedido/vazio");
	}
}

function buscarProd($id){
	$busca = pegarNomeProdutoPorId($id);
	return $busca["NomeProduto"];
}

function finalizar(){
	$idProd = array();
	$quant = array();
	$valFrete = 5;
	$vlrProd = $_SESSION["valorTotal"];
	$obs = "algo";
	for ($i=0; $i < count($_SESSION["carrinho"]); $i++) { 
		$idProd = $_SESSION["carrinho"][$i]["id"];
		$quant = $_SESSION["carrinho"][$i]["quantidade"];
	}

	$pedido = adicionarPedido($idProd,$quant,$valFrete, $vlrProd,$obs);
	unset($_SESSION["carrinho"]);
	unset($_SESSION["cupom"]);
        unset($_SESSION["valorTotal"]);
	unset($_SESSION["metodo"]);
        unset($_SESSION['segurança']);
        redirecionar("./home/");
}
