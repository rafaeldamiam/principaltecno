<center>
<form action="<?=@$acao?>" method="POST">
	<label for="nome">Nome do Produto:</label> 
	<input type="text" id="caixaTexto" name="nome" value="<?=@$produto['NomeProduto']?>">

	<label>Descrição:</label>
	<input type="text" id="caixaTexto" name="descricao" value="<?=@$produto['Descricao']?>">

	<label>Unidades:</label>
	<input type="text" id="caixaTexto" name="unidades" value="<?=@$produto['Unidades']?>">

	<br><br>

	<label for="imagem">Imagem:</label> 
	<input type="text" id="caixaTexto" name="imagem" value="<?=@$produto['Imagem']?>">

	<label for="preco">Preço:</label> 
	<input type="text" id="caixaTexto" name="preco" value="<?=@$produto['Preco']?>">

<br><br><br>
<button id="botao" type="submit">Enviar</button>
</form>
</center>