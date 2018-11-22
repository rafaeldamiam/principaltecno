<?php

function pegarTodosUsuarios() {
    $sql = "SELECT * FROM usuario";
    $resultado = mysqli_query(conn(), $sql);
    $usuarios = array();
    while ($linha = mysqli_fetch_array($resultado)) {
        $usuarios[] = $linha;
    }
    return $usuarios;
}

function pegarUsuarioPorEmail($email, $senha) {
    $sql = "SELECT NomeUsuario, Email, Senha, Tipo, IdUsuario FROM usuario WHERE Email = '$email' AND Senha = '$senha'";
    $resultado = mysqli_query(conn(), $sql);
    $usuario = mysqli_fetch_array($resultado);
    return $usuario;
}

function pegarUsuarioPorEmail2($email) {
    $sql = "SELECT * FROM usuario WHERE Email = '$email'";
    $resultado = mysqli_query(conn(), $sql);
    $usuario = mysqli_fetch_array($resultado);
    return $usuario;
}

function pegarUsuarioPorId($id) {
    $sql = "SELECT * FROM usuario WHERE IdUsuario = '$id'";
    $resultado = mysqli_query(conn(), $sql);
    $usuario = mysqli_fetch_array($resultado);
    return $usuario;
}

function adicionarUsuario($nome, $telefone, $cpf, $email, $senha ) {
    $sql = "INSERT INTO usuario (NomeUsuario, Telefone, Cpf, Email, Senha, Tipo) 
			VALUES ('$nome', '$telefone', '$cpf', '$email', '$senha', 'User')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar usuário' . mysqli_error($cnx)); }
    return 'Usuario cadastrado com sucesso!';
}

function editarUsuario($id, $nome, $cpf, $email, $senha, $telefone, $tipo) {
    if (empty($tipo)) {
        $tipo = 'User';
    }
    $sql = "UPDATE usuario SET NomeUsuario = '$nome', Email = '$email', Senha = '$senha', Telefone = '$telefone', Cpf = '$cpf', Tipo = '$tipo' WHERE IdUsuario = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar usuário <br>' . mysqli_error($cnx)); }
    return 'Usuário alterado com sucesso!';
}

function deletarUsuario($id) {
    $sql = "DELETE FROM usuario WHERE IdUsuario = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar usuário <br>' . mysqli_error($cnx)); }
    return 'Usuário deletado com sucesso!';
            
}
