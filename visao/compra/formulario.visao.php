<center>
	<h2>Finalizando compra</h2>
	<br><br>
	<table border="1">
		<tr>
			<td>Nome Produto</td>
		</tr>
		<?php foreach ($produtos as $produto): ?>
			<tr>
				<td><a href="./produto/visualizar/<?=$produto['IdProduto']?>" class="btn btn-secondary"><?= $produto["NomeProduto"] ?></a></td>
			</tr>
		<?php endforeach; ?>
	</table>
	<br>
	<h3>Valor Total da Compra:<?=$_SESSION["valorTotal"]?></h3>

	<a href="./cupom/confereCupom" class="btn btn-secondary">Possui Cupom?? Clique aqui para usar seu cupom</a>

	<h3>Escolha seu método de pagamento</h3>
	<form action="<?=@$acao?>" method="POST">
		<input type="radio" name="pagamento" value="Credito">
		<label for="pagamento">Cartão de Crédito</label><br>
		<input type="radio" name="pagamento" value="Debito">
		<label for="pagamento">Cartão de Débito</label><br>
		<input type="radio" name="pagamento" value="Boleto">
		<label for="pagamento">Boleto Bancário</label><br>
		<input type="radio" name="pagamento" value="PrincipalTecno">
		<label for="pagamento">Cartão Principal Tecno</label><br><br>

		<button id="botao" type="submit">Enviar</button>
	</form>
</center>