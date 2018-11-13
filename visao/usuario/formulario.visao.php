<center>
	<form action="<?=@$acao?>" method="POST">
		
		<input type="hidden" id="caixaTexto" name="id" value="<?=@$usuario['IdUsuario']?>">

		<label for="nome">Nome:</label> 
		<input type="text" id="caixaTexto" name="nome" value="<?=@$usuario['NomeUsuario']?>">

		<label>Telefone:</label>
		<input type="text" id="caixaTexto" name="telefone" value="<?=@$usuario['Telefone']?>">

		<label>Cpf:</label>
		<input type="text" id="caixaTexto" name="cpf" value="<?=@$usuario['Cpf']?>">

		<br><br>

		<label for="email">Email:</label> 
		<input type="text" id="caixaTexto" name="email" value="<?=@$usuario['Email']?>">

		<label>Senha:</label>
		<input type="password" id="caixaTexto" name="senha" value="<?=@$usuario['Senha']?>">

		<?php if(adminEstaLogado()): ?>
			<label>Tipo:</label>
			<input type="text" id="caixaTexto" name="tipo" value="<?=@$usuario['Tipo']?>">	
		<?php endif; ?>

		<br><br><br>
		<button id="botao" type="submit">Enviar</button>
	</form>
</center>