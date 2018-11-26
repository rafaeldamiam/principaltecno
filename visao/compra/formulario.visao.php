<center>
	<h2>Finalizando compra</h2>
	<br><br>
	<table border="1">
		<tr>
			<td>Produtos</td>
		</tr>
		<?php foreach ($produtos as $produto): ?>
			<tr>
				<td><a href="./produto/visualizar/<?=$produto['IdProduto']?>" class="btn btn-secondary"><?= $produto["NomeProduto"] ?></a></td>
			</tr>
		<?php endforeach; ?>
	</table>
        <br>
	<h3>Valor Total da Compra: <?=$_SESSION["valorTotal"]?></h3>
        <?php 
                $_SESSION["valorTotal"] = fazendoDesconto();
		if (!empty($_SESSION["cupom"])) {
	?>
                <h3>Valor Total da Compra Com Desconto: <?=$_SESSION["valorTotal"]?></h3>
        <?php
		}else{
	?>
                <a href="./cupom/confereCupom" class="btn btn-secondary">Possui Cupom?? Clique aqui para usar seu cupom</a>
        <?php
		}
	?>
        <br>

	<?php 
		if (empty($_SESSION["metodo"])) {
	?>
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
			</form>
	<?php
		}
	?>
		<br><br>
		<a href="pedido/finalizar">Finalizar Compra</a>
                <a href="compra/cancelarCompra">Cancelar Compra</a>
	</center>