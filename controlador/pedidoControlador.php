<?php
require_once "modelo/pedidoModelo.php";

/** Admin */
function index($id) {
	$dados["pedidos"] = pegarPedidoPorId($id);
    if (!empty($dados["pedidos"])) {
    	exibir("pedido/listar", $dados);
    }else{
    	exibir("pedido/vazio");
    }
}


function salvaPedido($id,$quanti){
    
}
