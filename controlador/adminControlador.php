<?php 

require_once 'modelo/produtoModelo.php';

require_once 'modelo/pedidoModelo.php';

/** Admin */
function index() {
    exibir("admin/visualizar");
}

function quantProdutos(){
	$dados["produtos"] = pegarQuantDosProdutos();
	exibir("admin/listar", $dados);
}


function pedidosInterDatas(){
	$dados["pedidos"] = pegarPedidosPorInterDatas();
	exibir("admin/listar3", $dados);
}

function fatuPorPeriodo(){
	$dados["pedido"] = FaturamentoPorPeriodo();
	exibir("admin/listar4", $dados);
}
?>