<?php

function pegarTodosPedidos(){
    $sql = "SELECT * FROM pedido";
    $resultado = mysqli_query(conn(), $sql);
    $pedidos = array();
    while ($linha = mysqli_fetch_array($resultado)) {
        $pedidos[] = $linha;
    }
    return $pedidos;
}

function pegarPedidosPorId($id){
    $sql = "SELECT * FROM pedido WHERE IdUsuario = '$id'";
    $resultado = mysqli_query(conn(), $sql);
    $pedidos = array();
    while ($linha = mysqli_fetch_array($resultado)) {
        $pedidos[] = $linha;
    }
    return $pedidos;
}

function adicionarPedido($idProd,$quant,$valFrete, $vlrProd,$obs){
    $idUser = $_SESSION["idLogado"];
    $sql = "INSERT INTO pedido(IdUsuario,IdProduto,Quantidade,Dtpedido, Dtentrega, Frete, VlrTotal, Observacao) 
VALUES ('$idUser','$idProd','$quant',NOW(),NOW()+INTERVAL 15 DAY,'$valFrete','$vlrProd','$obs')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar produto' . mysqli_error($cnx)); }
    return 'Produto cadastrado com sucesso!';
}

function pegarPedidosPorInterDatas(){
    $sql = "SELECT * FROM pedido WHERE 
    DtPedido >= NOW()-INTERVAL 30 DAY";
    $resultado = mysqli_query(conn(), $sql);
    $pedidos = array();
    while ($linha = mysqli_fetch_array($resultado)) {
        $pedidos[] = $linha;
    }
    return $pedidos;
}

function FaturamentoPorPeriodo(){
    $sql = "SELECT SUM(VlrTotal) FROM pedido WHERE DtPedido >= NOW()-INTERVAL 30 DAY";
    $resultado = mysqli_query(conn(), $sql);
    $pedidos = mysqli_fetch_array($resultado);
    return $pedidos;
}


