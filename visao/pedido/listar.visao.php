<h2>Pedidos</h2>
<br><br>
<center>
    <?php foreach ($pedidos as $pedido): ?>

        <div id="pedido">
            <h3><?=$pedido['IdProduto']?></h3>
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
</center>