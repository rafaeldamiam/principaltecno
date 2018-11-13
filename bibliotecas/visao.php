<?php

function exibir($view, $data = array()) {
    $viewFilePath = 'visao/' . $view . '.visao.php';

    if (!file_exists($viewFilePath)) {
        die("Não foi encontrado o arquivo '$viewFilePath' correspondente a visão requisitada!");
    }

    extract($data);

    require("visao/template.php");
}

function redirecionar($path) {
    $finalPath = BASE_URL . $path;
    header("location: $finalPath");
}

function assinalarCampo($valorA, $valorB) {
    if ($valorA == $valorB) {
        return 'selected';
    }
}

?>