<?php

function pegarTodosCupons(){
    $sql = "SELECT * FROM cupom";
    $resultado = mysqli_query(conn(), $sql);
    $cupons = array();
    while ($linha = mysqli_fetch_array($resultado)) {
        $cupons[] = $linha;
    }
    return $cupons;
}

function adicionarCupom($nomecupom, $desconto) {
    $sql = "INSERT INTO cupom(NomeCupom, Desconto) VALUES ('$nomecupom', '$desconto');";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar cupom' . mysqli_error($cnx)); }
    return 'Cupom cadastrado com sucesso!';
}

function deletarCupom($id) {
    $sql = "DELETE FROM cupom WHERE IdCupom = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar Cupom!' . mysqli_error($cnx)); }
    return 'Cupom deletado com sucesso!';

}

function pegarCupomPorNome($nomeCupom){
    $sql = "SELECT Desconto FROM cupom WHERE NomeCupom = '$nomeCupom'";
    $resultado = mysqli_query(conn(), $sql);
    $cupons = array();
     while ($linha = mysqli_fetch_array($resultado)) {
        $cupons[] = $linha;
    }
    return $cupons;
}

?>