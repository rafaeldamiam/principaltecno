<h2>Produtos</h2>
<br><br>
<center>
    <?php foreach ($produtos as $produto): ?>

        <div id="produto">
            <h3><?=$produto['NomeProduto']?></h3>
            <img id="imgProd1" src="<?=$produto['Imagem']?>">
            <h3>R$ <?=$produto['Preco']?></h3><br><br>
            <a href="./produto/visualizar/<?=$produto['IdProduto']?>" class="btn btn-secondary">Descrever</a>
            <?php if(adminEstaLogado()): ?>
                <a href="./produto/editar/<?=$produto['IdProduto']?>" class="btn btn-info">Editar</a>
                <a href="./produto/deletar/<?=$produto['IdProduto']?>" class="btn btn-danger">Deletar</a>
            <?php endif; ?>
            <br><br><br>
        </div>

    <?php endforeach; ?>

    <br>
    <?php if(adminEstaLogado()): ?>
        <a href="./produto/adicionar" class="btn btn-primary">Adicionar novo produto</a>
    <?php endif; ?>
<center>