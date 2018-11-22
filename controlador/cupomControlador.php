<?php
require 'modelo/cupom   Modelo.php';
/** anon */
function index(){
	$dados["cupons"] = pegarTodosCupons();
	exibir("cupom/listar", $dados);	
}

/** Admin */
function adicionar() {
    if (ehPost()) {
        extract($_POST);
        alert(adicionarProduto($nome, $descricao, $categoria, $unidades, $preco, $imagem));
        redirecionar("cupom/index");
    } else {
        exibir("cupom/formulario");
    }
}

/** Admin */
function deletar($id) {
    alert(deletarProduto($id));
    redirecionar("cupom/index");
}

/** Admin */
function editar($id) {
    if (ehPost()) {
        $nome = $_POST["nome"];
        $descricao = $_POST["descricao"];
        $unidades = $_POST["unidades"];
        $preco = $_POST["preco"];
        $imagem = $_POST["imagem"];
        alert(editarProduto($id, $nome, $descricao, $unidades, $preco, $imagem));
        redirecionar("produto/index");
    } else {
        $dados['produto'] = pegarProdutoPorId($id);
        $dados['acao'] = "./produto/editar/$id";
        exibir("produto/formulario", $dados);
    }
}

/** anon */ 
function visualizar($id) {
    $dados['produto'] = pegarProdutoPorId($id);
    exibir("produto/visualizar", $dados);
}

?>