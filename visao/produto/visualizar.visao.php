<center>
	<h2><?=$produto['NomeProduto']?></h2>
	<img id="imgProd" src="<?=$produto['Imagem']?>">

	<?php if(adminEstaLogado()): ?>
		<p><strong>Id Produto:</strong> <?=$produto['IdProduto']?></p>
	<?php endif; ?>
	<p><strong>Nome Produto:</strong> <?=$produto['NomeProduto']?></p>
	<p><strong>Descricao:</strong> <?=$produto['Descricao']?></p>
	<p><strong>Unidades:</strong> <?=$produto['Unidades']?></p>
	<p><strong>Preço:</strong> <?=$produto['Preco']?></p>
	<br><br>

	<a href="./carrinho/adicionar/<?=$produto['IdProduto']?>">Adicionar ao Carrinho</a>

</center>