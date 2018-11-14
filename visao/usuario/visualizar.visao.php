<center>
	<h2>Dados do Usuário</h2>
	<?php if(adminEstaLogado()): ?>
		<p><strong>Id:</strong> <?=$usuario['IdUsuario']?></p>
		<p><strong>Tipo: </strong><?=$usuario['Tipo']?></p>
	<?php endif; ?>
	<p><strong>Nome:</strong> <?=$usuario['NomeUsuario']?></p>
	<p><strong>Cpf:</strong> <?=$usuario['Cpf']?></p>
	<p><strong>Email:</strong> <?=$usuario['Email']?></p>
	<p><strong>Senha:</strong> <?=$usuario['Senha']?></p>
	<p><strong>Telefone:</strong> <?=$usuario['Telefone']?></p>
	<br><br>
	<a href="./usuario/editar/<?=$usuario['IdUsuario']?>">Editar</a>
	<a href="./usuario/deletar/<?=$usuario['IdUsuario']?>">Deletar</a>
	<a href="./usuario" class="btn btn-primary">Voltar</a>
</center>