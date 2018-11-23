<center>
<h2>Finalizando compra</h2>
<br><br>
	<table border="1">
	        <tr>
	            <td>Nome Produto</td>
	            <td>Preço Unidade</td>
	            <td>Quantidade</td>
	            <td>Valor Produtos</td>
	        </tr>
	            <?php foreach ($produtos as $produto): ?>
	                <tr>
	                    <td><a href="./produto/visualizar/<?=$produto['IdProduto']?>" class="btn btn-secondary"><?= $produto["NomeProduto"] ?></a></td>
	                    <td><?= $produto["NomeProduto"] ?></td>
	                    <td></td>
	                </tr>
	            <?php endforeach; ?>
	    </table>
<br><br><br><br>

<a href="./cupom/confereCupom" class="btn btn-secondary">Possui Cupom?? Clique aqui para usar seu cupom</a>



	<form action="ex-enquete.php" method="POST">
		<input type="radio" name="enquete" value="Tá tranquila, tá favorável">
		<label for="enquete">Tá tranquila, tá favorável</label><br>
		<input type="radio" name="enquete" value="Está complicadíssima">
		<label for="enquete">Está complicadíssima</label><br>
		<input type="radio" name="enquete" value="Já foi pior">
		<label for="enquete">Já foi pior</label><br>
		<input type="radio" name="enquete" value="Tende a piorar">
		<label for="enquete">Tende a piorar</label><br><br>
		<input type="submit" name="Vai enquete!">
	</form>


<br><br><br>
<button id="botao" type="submit">Enviar</button>
</form>
</center>