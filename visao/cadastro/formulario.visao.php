<center>
<h2>Cadastra-se aqui</h2>
<br><br>
<form action="<?=@$acao?>" method="POST">
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
   
<br><br><br>
<button id="botao" type="submit">Enviar</button>
</form>
</center>