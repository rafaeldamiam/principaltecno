<html>
    <head>
        <title>PrincipalTecno</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <base href="<?= BASE_URL ?>">
        <link rel="sortcut icon" href="./bibliotecas/imagens/icon.ico" type="image/gif">
        <link rel="stylesheet" href="./publico/css/app.css">
    </head>
    <body class="container">
        <?php require "visao/cabecalho.php"; ?>

        <?php alertComponentRender(); ?>

        <main class="container">
            <?php require $viewFilePath; ?>
        </main>
        <?php require "visao/rodape.php"; ?>
    </body>
</html>
