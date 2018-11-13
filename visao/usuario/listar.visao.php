<h2>Listar usuários</h2>
<br><br>
<center>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Descrever</th>
                <th>Editar</th>
                <th>Deletar</th>
            </tr>
        </thead>
        <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?=$usuario['IdUsuario']?></td>
                <td><?=$usuario['NomeUsuario']?></td>
                <td><?=$usuario['Email']?></td>
                <td><a href="./usuario/visualizar/<?=$usuario['IdUsuario']?>" class="btn btn-secondary">Descrever</a></td>
                <td><a href="./usuario/editar/<?=$usuario['IdUsuario']?>" class="btn btn-info">Editar</a></td>
                <td><a href="./usuario/deletar/<?=$usuario['IdUsuario']?>" class="btn btn-danger">Deletar</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <br>
    <a href="./usuario/adicionar" class="btn btn-primary">Adicionar novo usuario</a>
    <center>
