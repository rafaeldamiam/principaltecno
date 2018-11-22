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

function prodCategoria(){
	$dados["produtos"] = pegarProdPorCategoria();
	exibir("admin/listar2", $dados);
}

function pedidosInterDatas(){
	$dados["pedidos"] = pegarPedidosPorInterDatas();
	exibir("admin/listar3", $dados);
}

function pedidosPorRegiao(){
	$dados["produtos"] = pegarQuantDosProdutos();
	exibir("admin/listar4", $dados);
}

function fatuPorPeriodo(){
	$dados["produtos"] = pegarQuantDosProdutos();
	exibir("admin/listar5", $dados);
}
?>