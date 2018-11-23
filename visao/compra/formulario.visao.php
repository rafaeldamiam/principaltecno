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



<br><br><br>
<button id="botao" type="submit">Enviar</button>
</form>
</center>