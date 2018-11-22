<h2>Cupom</h2>
<br><br>
<center>
    <table border="1">
        <tr>
            <td>Nome do Cupom</td>
            <td>Desconto</td>
            <td>Excluir</td>
        </tr>
        <?php foreach ($cupons as $cupom): ?>
            <tr>
                <td><?=$cupom['NomeCupom']?></td>
                <td><?=$cupom['Desconto']?>%</td>
                <td><a href="./cupom/deletar/<?=$cupom['IdCupom']?>" class="btn btn-danger">Deletar</a></td>
            </tr>
        <?php endforeach; ?>
    </table>  
    <br>
    <a href="./cupom/adicionar" class="btn btn-primary">Adicionar novo Cupom</a>
</center>