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

/** anon */ 
function confereCupom() {
    if (ehPost()) {
        extract($_POST);
        $nomecupom = $_POST["nomeCupom"];
        $_SESSION["cupom"] = pegarCupomPorNome($nomecupom);
        redirecionar("compra/", $_SESSION['cupom']);
    } else {
        exibir("cupom/confereCupom");
    }
    
}


?>