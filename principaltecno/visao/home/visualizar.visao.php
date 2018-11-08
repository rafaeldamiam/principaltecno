<center>
    <h2>Seja bem-vindo a Principal Tecno</h2>
    <br><br>
    <h3>A principal tecnologia para você</h3>
    <br><br>
    
    <div class="container">
        <br>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

                <div class="item active">
                    <img src="./bibliotecas/imagens/img0.jpg" alt="Dell Gaming I15" width="460" height="345">
                    <div class="carousel-caption">
                        <h3>Dell Gaming I15</h3>
                        <p>Aproveite! O inovador notebook gamer da Dell</p>
                    </div>
                </div>

                <div class="item">
                    <img src="./bibliotecas/imagens/img1.jpg" alt="Iphone X" width="460" height="345">
                    <div class="carousel-caption">
                        <h3>Iphone X</h3>
                        <p>O celular mais desejado em todo o mundo. (e um dos mais caros também)</p>
                    </div>
                </div>

                <div class="item">
                    <img src="./bibliotecas/imagens/img2.jpg" alt="A8" width="460" height="345">
                    <div class="carousel-caption">
                        <h3>Galaxy A8</h3>
                        <p>Um ótimo celular para quem ganha apenas um salário mínimo</p>
                    </div>
                </div>

                <div class="item">
                    <img src="./bibliotecas/imagens/img3.jpg" alt="Samsung Smart TV 4K" width="460" height="345">
                    <div class="carousel-caption">
                        <h3>Samsung Smart TV 4K</h3>
                        <p>Você nem precisará sair de casa para ir ao cinema. Garanta já o cinema em sua humilde residência!</p>
                    </div>
                </div>

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    
    <br><br>
    <?php foreach ($produtos as $produto): ?>

        <div id="produto">
            <h3><?= $produto['NomeProduto'] ?></h3>
            <img id="imgProd1" src="<?= $produto['Imagem'] ?>">
            <h3>R$ <?= $produto['Preco'] ?></h3><br><br>
            <a href="./produto/visualizar/<?= $produto['IdProduto'] ?>" class="btn btn-secondary">Descrever</a>
            <?php if (adminEstaLogado()): ?>
                <a href="./produto/editar/<?= $produto['IdProduto'] ?>" class="btn btn-info">Editar</a>
                <a href="./produto/deletar/<?= $produto['IdProduto'] ?>" class="btn btn-danger">Deletar</a>
            <?php endif; ?>
            <br><br><br>
        </div>

    <?php endforeach; ?>
</center>

