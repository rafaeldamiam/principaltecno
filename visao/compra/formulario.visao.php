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
	                    <td></td>
	                    <td></td>
	                </tr>
	            <?php endforeach; ?>
	    </table>   
<br><br><br>
<button id="botao" type="submit">Enviar</button>
</form>
</center>