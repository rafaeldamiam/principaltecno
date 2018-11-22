<h2>Relatórios</h2>
<h3>Quantidade de produtos no estoque</h3>
<br><br>
<center>
    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Quantidade</th>
            </tr>
        </thead>
        <?php foreach ($produtos as $produto): ?>
            <tr>
                <td><?=$produto['NomeProduto']?></td>
                <td><?=$produto['Unidades']?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <br>
    <a href="./admin" class="btn btn-primary">Voltar</a>
</center>
