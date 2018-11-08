<br><br>
<footer>
	<ul>
		<li>
			<?php
			if(isset($_SESSION["auth"])){
				$id = $_SESSION["idLogado"];
				echo"<a href='./usuario/visualizar/$id'>Minha Conta</a>";
			}else{
				echo"<a href='./login/'>Minha Conta</a>";
			}
		?>
		</li>
		<li><a href="./carrinho"><img src="./bibliotecas/imagens/carrinho.png" alt="Carrinho" id="social"></a></li>
		<li><a href="./atendCliente">Atendimento ao Cliente</a></li>
	</ul>

	<center>
		<div id="social">
			<h3>Nos siga em nossas redes sociais</h3>
			<br>
			<a href="https://facebook.com" target="_blank"><img src="./bibliotecas/imagens/facebook.png" alt="Facebook" id="social"></a>
			<a href="https://instagram.com" target="_blank"><img src="./bibliotecas/imagens/instagram.png" alt="Instagram" id="social"></a>
			<a href="https://twitter.com" target="_blank"><img src="./bibliotecas/imagens/twitter.png" alt="Twitter" id="social"></a>
		</div>
	</center>

</footer>
