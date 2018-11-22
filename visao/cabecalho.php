<nav>
    <form action="./pesquisar" method="POST">
        <input type="text" name="pesquisar" id="caixaTexto">
        <button type="submit" id="botao">Pesquisar</button>
        <?php
        if (isset($_SESSION["auth"])) {
            if ($_SESSION["auth"]["role"] == "Admin") {
                echo"<li><a href='./admin'>Administração</a></li>";
            }
        }
        ?>
        <?php
        if (isset($_SESSION["auth"])) {
            $id = $_SESSION["idLogado"];
            echo "<a href='./pedido/index/$id'>Pedidos</a>";
        } else {
            echo "<a href='./login'>Pedidos</a>";
        }
        ?>
        <?php
        if (isset($_SESSION["auth"])) {
            echo "<a href='./login/logout'>Logout</a>";
        } else {
            echo "<a href='./login'>Login</a>";
        }
        ?>

    </form>
    <br><br>
    <ul>
        <li><a href="./">Home</a></li>
        <li><a href="./sobreNos">Sobre Nós</a></li>
        <li><a href="./produto">Produtos</a></li>
        <li>
            <?php
            if (isset($_SESSION["auth"])) {
                $id = $_SESSION["idLogado"];
                echo"<a href='./usuario/visualizar/$id'>Minha Conta</a>";
            } else {
                echo"<a href='./login/'>Minha Conta</a>";
            }
            ?>
        </li>
        <li><a href="./carrinho"><img src="./bibliotecas/imagens/carrinho.png" id="social"></a></li>
        <li><a href="./atendCliente">Atendimento ao Cliente</a></li>
    </ul>
</nav>
