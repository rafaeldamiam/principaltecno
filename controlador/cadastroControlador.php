<?php

require_once "modelo/usuarioModelo.php";
/** anon */
function index() {
	if (ehPost()) {
		extract($_POST);
		verificarCadastro($nome, $email, $telefone, $senha, $cpf);
	} else {
		exibir("cadastro/formulario");
	}
}

function verificarCadastro($nome, $email, $telefone, $senha, $cpf ){

	foreach ($_POST as $chave => $valor) {
		$$chave = (trim(strip_tags($valor)));
	}

	$error = false;

	if (((strlen($nome) == 0)||(strlen($nome) < 3))|| (filter_input(INPUT_POST, $nome , FILTER_SANITIZE_STRING))){
		alert("Você deve inserir seu nome");
		$error = true;
		redirecionar("cadastro/index");
	}else{
		$nomecorreto = $nome;
	}

		//email
	if ((strlen($email) == 0) || (filter_input(INPUT_POST, $email , FILTER_VALIDATE_EMAIL))) {
		alert(" Você deve inserir um e-mail");
		$error = true;
		redirecionar("cadastro/index");
	}else{
		$emailcorreto = $email;
	}
		//senha
	if ((strlen($senha) == 0) || (strlen($senha) < 8 ) || (strlen($senha) > 16) || (ctype_upper($senha))){
		alert(" Você deve inserir uma senha entre 8 a 16 caracteres");
		alert(" Sua senha deve conter letras maiusculas e minusculas");
		alert(" Senhas não coincidem");
		$error = true;
		redirecionar("cadastro/index");
	}else{
		$senhacorreta = $senha;
	}

	if ((!is_numeric($telefone))||(strlen($telefone) < 11)){
		alert(" Número de telefone inválido");
		$error = true;
		redirecionar("cadastro/index");
	}else{
		$telefonecorreto = $telefone;
	}

	if ((!preg_match("/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}$/", $cpf)) || (strlen($cpf) < 13)) {
		alert(" CPF inválido");
		$error = true;
		redirecionar("cadastro/index");
	}else{
		$cpfcorreto = $cpf;
	}

	if (!$error) {
		$registro = pegarUsuarioPorEmail2($email);
		if($registro != null) {
			alert(" Email já cadastrado");
			exibir("cadastro/formulario");
		} else {
			alert(adicionarUsuario($nome, $telefone, $cpf, $email, $senha));
			redirecionar("produto/index");
		}
	}

}



?>