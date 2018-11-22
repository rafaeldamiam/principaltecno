<h2>Relatórios</h2>
<h3>Pedidos Mensais</h3>
<br><br>
<center>
    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Data do Pedido</th>
                <th>Data de Entrega</th>
            </tr>
        </thead>
        <?php foreach ($pedidos as $pedido): ?>
            <tr>
                <td><?=$pedido['IdPedido']?></td>
                <td><?=$pedido['Dtpedido']?></td>
                <td><?=$pedido['Dtentrega']?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <br>
    <a href="./admin" class="btn btn-primary">Voltar</a>
</center>
