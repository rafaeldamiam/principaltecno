<?php

function pegarTodosProdutos(){
    $sql = "SELECT * FROM produto";
    $resultado = mysqli_query(conn(), $sql);
    $produtos = array();
    while ($linha = mysqli_fetch_array($resultado)) {
        $produtos[] = $linha;
    }
    return $produtos;
}

function pegarProdutoPorId($id) {
    $sql = "SELECT * FROM produto WHERE IdProduto = '$id'";
    $resultado = mysqli_query(conn(), $sql);
    $produto = mysqli_fetch_array($resultado);
    return $produto;
}

function pegarNomeProdutoPorId($id) {
    $sql = "SELECT NomeProduto FROM produto WHERE IdProduto = '$id'";
    $resultado = mysqli_query(conn(), $sql);
    $produto = mysqli_fetch_array($resultado);
    return $produto;
}

function pegar10Produtos() {
    $sql = "SELECT * FROM produto WHERE IdProduto <= 10";
    $resultado = mysqli_query(conn(), $sql);
    $produtos = array();
    while ($linha = mysqli_fetch_array($resultado)) {
        $produtos[] = $linha;
    }
    return $produtos;
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

function pegarQuantProdutoPorId($id){
    $sql = "SELECT Unidades FROM produto WHERE IdProduto = '$id'";
    $resultado = mysqli_query(conn(), $sql);
    $produto = mysqli_fetch_array($resultado);
    return $produto;
}

function pegarQuantDosProdutos(){
    $sql = "SELECT Unidades, NomeProduto FROM produto";
    $resultado = mysqli_query(conn(), $sql);
    $produtos = array();
    while ($linha = mysqli_fetch_array($resultado)) {
        $produtos[] = $linha;
    }
    return $produtos;
}

function pegarProdPorCategoria(){
    $sql = "SELECT Nome, Preco FROM produto WHERE Categoria = 'celular'";
    $resultado = mysqli_query(conn(), $sql);
    $produtos = array();
    while ($linha = mysqli_fetch_array($resultado)) {
        $produtos[] = $linha;
    }
    return $produtos;
}

?>