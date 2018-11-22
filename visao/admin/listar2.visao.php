<h2>Relatórios</h2>
<h3>Produtos em cada categoria</h3>
<br><br>
<center>
    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Preço</th>
            </tr>
        </thead>
        <?php foreach ($produtos as $produto): ?>
            <tr>
                <td><?=$produto['NomeProduto']?></td>
                <td><?=$produto['Preco']?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <br>
    <a href="./admin" class="btn btn-primary">Voltar</a>
</center>
