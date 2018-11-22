<center>
    <h2>Carrinho</h2>
    <br><br>
    <table border="1">
        <tr>
            <td>Nome Produto</td>
            <td>Preço Unidade</td>
            <td>Quantidade</td>
            <td>Valor Produtos</td>
            <td>Adicionar/Remover</td>
            <td>Excluir</td>
        </tr>
            <?php $soma= 0;$i = 0; foreach ($produtos as $produto): ?>
                <tr>
                    <td><a href="./produto/visualizar/<?=$produto['IdProduto']?>" class="btn btn-secondary"><?= $produto["NomeProduto"] ?></a></td>
                    <td><?= $preco=$produto["Preco"] ?></td>
                    <td><?= $quanti=$quant[$i++] ?></td>
                    <td><?=calPreco($preco,$quanti)?></td>
                    <?php
                    $soma= $soma+calPreco($preco,$quanti);                    
                    ?>
                    <td><a href="./carrinho/sumOne/<?= $produto['IdProduto'] ?>">+  </a><a href="./carrinho/minOne/<?= $produto['IdProduto'] ?>">   -</a></td>
                    <td><a href="./carrinho/excluir/<?= $produto['IdProduto'] ?>">Excluir</a></td>
                </tr>
            <?php endforeach; ?>
    </table>
    <br><br> 
        <a>Valor Total: <?=$soma?></a>
    <br><br><br>   
<a href="./carrinho/excluirTudo">Limpar Carrinho</a>
<a href="./compra/">Comprar</a>	
</center>