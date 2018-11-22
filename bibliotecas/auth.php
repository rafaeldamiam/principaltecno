<?php
require './modelo/usuarioModelo.php';
define('AUTENTICADOR', true);

function authLogin($email, $senha) {
    $usuario = pegarUsuarioPorEmail($email, $senha);
        if(!empty($usuario)){
            $_SESSION["auth"] = array("Nome" => $usuario["NomeUsuario"], "role" => $usuario["Tipo"]);
            $_SESSION["idLogado"] = $usuario["IdUsuario"];
            return true;
        }else{
            return false;
        }
}

function authIsLoggedIn() {
    return isset($_SESSION["auth"]);
}

function authLogout() {
    if (isset($_SESSION["auth"])) {
        $_SESSION["auth"] = null;
        unset($_SESSION["auth"]);
        unset($_SESSION["idLogado"]);
    }
}

function authGetUserRole() {
    if (authIsLoggedIn()) {
        return $_SESSION["auth"]["role"];
    }
}

function adminEstaLogado() {
    if (isset($_SESSION["auth"]["role"]) && $_SESSION["auth"]["role"] == "Admin") {
        return true;
    }

    return false;
}