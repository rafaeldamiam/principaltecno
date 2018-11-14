<?php
require 'modelo/produtoModelo.php';
/** anon */
function index(){
	$dados["produtos"] = pegarTodosProdutos();
	exibir("produto/listar", $dados);	
}

/** Admin */
function adicionar() {
    if (ehPost()) {
        extract($_POST);
        alert(adicionarProduto($nome, $descricao, $categoria, $unidades, $preco, $imagem));
        redirecionar("produto/index");
    } else {
        exibir("produto/formulario");
    }
}

/** Admin */
function deletar($id) {
    alert(deletarProduto($id));
    redirecionar("produto/index");
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