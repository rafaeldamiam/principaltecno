<?php

function pegarTodosCupons(){
    $sql = "SELECT * FROM Cupom";
    $resultado = mysqli_query(conn(), $sql);
    $cupons = array();
    while ($linha = mysqli_fetch_array($resultado)) {
        $cupons[] = $linha;
    }
    return $cupons;
}

function adicionarProduto($nome, $descricao, $categoria, $unidades, $preco, $imagem ) {
    $sql = "INSERT INTO produto (NomeProduto, Descricao, Categoria, Unidades, Preco, Imagem) 
    VALUES ('$nome', '$descricao', '$categoria', '$unidades', '$preco', '$imagem')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar produto' . mysqli_error($cnx)); }
    return 'Produto cadastrado com sucesso!';
}

function editarProduto($id, $nome, $descricao, $categoria, $unidades, $preco, $imagem) {
    $sql = "UPDATE produto SET NomeProduto = '$nome', Descricao = '$descricao', Categoria = '$categoria', Unidades = '$unidades', Preco = '$preco', Imagem = '$imagem'  WHERE IdProduto = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar produto' . mysqli_error($cnx)); }
    return 'Produto alterado com sucesso!';
}

function deletarProduto($id) {
    $sql = "DELETE FROM produto WHERE IdProduto = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar produto' . mysqli_error($cnx)); }
    return 'Produto deletado com sucesso!';

}

function pegarProdutoPorNome($pesquisar){
    $sql = "SELECT * FROM produto WHERE NomeProduto LIKE '%$pesquisar%'";
    $resultado = mysqli_query(conn(), $sql);
    if ($resultado) {
        $produtos = array();
        while ($linha = mysqli_fetch_array($resultado)) {
            $produtos[] = $linha;
        }
        return $produtos;
    }else{
        return false;
    }
}

?>