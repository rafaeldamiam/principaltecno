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

function salvaPedido($id,$quanti){
    
}
