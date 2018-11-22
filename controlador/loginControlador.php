<?php
require_once "modelo/usuarioModelo.php";
/** anon */
function index() {
    if (ehPost()) {
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        if (authLogin($email, $senha)) {
            alert("Bem-vindo " . $email);
            redirecionar("produto");
        } else {
            alert("Usuário ou senha inválidos!");
        }
    }
    exibir("login/index");
}

/** anon */
function logout() {
    authLogout();
    alert("Deslogado com sucesso!");
    redirecionar("usuario");
}

?>