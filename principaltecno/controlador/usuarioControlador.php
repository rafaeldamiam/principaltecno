<?php

require_once "modelo/usuarioModelo.php";

/** Admin */
function index() {
    $dados["usuarios"] = pegarTodosUsuarios();
    exibir("usuario/listar", $dados);
}

/** anon */
function adicionar() {
    if (ehPost()) {
        extract($_POST);
        alert(adicionarUsuario($nome, $telefone, $cpf, $email, $senha));
        redirecionar("usuario/index");
    } else {
        exibir("usuario/formulario");
    }
}

/** Admin, User */
function deletar($id) {
    alert(deletarUsuario($id));
    authLogout();
    redirecionar("usuario/index");
}

/** Admin, User */
function editar($id) {
    if (ehPost()) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $cpf = $_POST["cpf"];
        $senha = $_POST["senha"];
        $telefone = $_POST["telefone"];
        $id = $_POST["id"];
        $tipo = $_POST["tipo"];
        alert(editarUsuario($id, $nome, $cpf, $email, $senha, $telefone, $tipo));
        redirecionar("usuario/visualizar/$id");
    } else {
        $dados['usuario'] = pegarUsuarioPorId($id);
        $dados['acao'] = "./usuario/editar/$id";
        exibir("usuario/formulario", $dados);
    }
}

/** User, Admin */
function visualizar($id) {
    $dados['usuario'] = pegarUsuarioPorId($id);
    exibir("usuario/visualizar", $dados);
}

?>