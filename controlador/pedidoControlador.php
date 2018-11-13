<?php
require_once "modelo/pedidoModelo.php";

/** Admin */
function index() {
    $dados["pedidos"] = pegarTodosPedidos();
    exibir("pedido/listar", $dados);
}
function salvaPedido($id,$quanti){
    
}
