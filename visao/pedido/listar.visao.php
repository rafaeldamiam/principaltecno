<center>
    <h2>Compras Antigas</h2>
    <br><br>
    <table border="1">
        <tr>
            <td>Preço</td>
            <td>Data de Pedido</td>
            <td>Data de Entrega</td>
        </tr>
            <?php foreach ($pedidos as $pedido): ?>
                <tr>
                    <?php
                        $nome = buscarProd($pedido["IdProduto"]);
                    ?>
                    <td><?=$pedido['VlrTotal']?></td>
                    <td><?=$pedido['Dtpedido']?></td>
                    <td><?=$pedido['Dtentrega']?></td>
                </tr>
            <?php endforeach; ?>
    </table>   
<br><br>    
</center>
