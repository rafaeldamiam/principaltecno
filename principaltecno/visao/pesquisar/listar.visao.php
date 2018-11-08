<h2>Resultados</h2>
<br><br>
<center>
    <table class="table">
        <thead>
            <tr>
                <?php if(adminEstaLogado()): ?>
                    <th>Id</th>
                <?php endif; ?>
                <th>Nome do Produto</th>
                <th>Preço</th>
                <th>Descrever</th>
                <?php if(adminEstaLogado()): ?>
                    <th>Editar</th>
                    <th>Deletar</th>
                <?php endif; ?>
            </tr>
        </thead>
        <?php foreach ($produtos as $produto): ?>
            <tr>
                <?php if(adminEstaLogado()): ?>
                    <td><?=$produto['IdProduto']?></td>
                <?php endif; ?>
                <td><?=$produto['NomeProduto']?></td>
                <td><?=$produto['Preco']?></td>
                <td><a href="./produto/visualizar/<?=$produto['IdProduto']?>" class="btn btn-secondary">Descrever</a></td>

                <?php if(adminEstaLogado()): ?>
                    <td><a href="./produto/editar/<?=$produto['IdProduto']?>" class="btn btn-info">Editar</a></td>
                    <td><a href="./produto/deletar/<?=$produto['IdProduto']?>" class="btn btn-danger">Deletar</a></td>
                <?php endif; ?>
            </tr>
        <?php endforeach; ?>
    </table>

    <br>
    <?php if(adminEstaLogado()): ?>
        <a href="./produto/adicionar" class="btn btn-primary">Adicionar novo produto</a>
    <?php endif; ?>
<center>