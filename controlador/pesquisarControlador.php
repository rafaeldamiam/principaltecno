<?php
require 'modelo/produtoModelo.php';
/** anon */
function index(){
	if (ehPost()) {
		extract($_POST);
		$dados["produtos"] = pegarProdutoPorNome($pesquisar);
		if ($dados["produtos"] == false){
			exibir("pesquisar/vazio");
		}else{
        	exibir("pesquisar/listar", $dados);		
    	}
		
	}
}

?>