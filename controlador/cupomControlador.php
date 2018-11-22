<?php
require 'modelo/cupomModelo.php';
/** anon */
function index(){
	$dados["cupons"] = pegarTodosCupons();
	exibir("cupom/listar", $dados);	
}

/** Admin */
function adicionar() {
    if (ehPost()) {
        extract($_POST);
        $nomecupom = $_POST["nomecupom"];
        $desconto = $_POST["desconto"];
        alert(adicionarCupom($nomecupom, $desconto));
        redirecionar("cupom/");
    } else {
        exibir("cupom/formulario");
    }
}

/** Admin */
function deletar($id) {
    alert(deletarCupom($id));
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