DROP DATABASE principaltecno;
CREATE DATABASE principaltecno;
USE principaltecno;

CREATE TABLE Usuario(
	IdUsuario INT AUTO_INCREMENT,
	NomeUsuario VARCHAR(60) NOT NULL,
	Telefone VARCHAR(11),
	Cpf VARCHAR(14)	 NOT NULL,
	Email VARCHAR(60) NOT NULL,
	Senha VARCHAR(16) NOT NULL,
	Tipo VARCHAR(5) NOT NULL,
	PRIMARY KEY(idUsuario)
) engine = innodb;


CREATE TABLE Produto(
	IdProduto INT AUTO_INCREMENT,
	NomeProduto VARCHAR(200) NOT NULL,
	Descricao VARCHAR(500) NOT NULL,
	Unidades VARCHAR(4) NOT NULL,
	Imagem VARCHAR(500) NOT NULL,
	Preco DOUBLE NOT NULL,
	PRIMARY KEY(IdProduto)
) engine = innodb;

CREATE TABLE Pedido(
	IdPedido INT AUTO_INCREMENT,
	IdUsuario INT NOT NULL,
	IdProduto INT NOT NULL,
        Quantidade INT NOT NULL,
	Dtpedido DATETIME NOT NULL,
	Dtentrega DATETIME NOT NULL,
	Frete DECIMAL(6,2) NOT NULL,
	VlrTotal DECIMAL(6,2)NOT NULL,
	Observacao VARCHAR(60) NOT NULL,
	PRIMARY KEY(IdPedido),
	FOREIGN KEY(IdUsuario) REFERENCES Usuario(IdUsuario),
	FOREIGN KEY(IdProduto) REFERENCES Produto(IdProduto)
) engine = innodb;

INSERT INTO Pedido(IdUsuario,IdProduto,Quantidade,Dtpedido, Dtentrega, Frete, VlrTotal, Observacao) 
VALUES
(2,1,3,NOW(),NOW()+INTERVAL 10 DAY,3,"1000","enfrente ao trevo"); 

INSERT INTO Usuario(NomeUsuario,Senha,Email, Telefone, Cpf, Tipo) 
VALUES
("Amanda Maziero","!@#$%", "mandahmaziero1999@gmail.com", 12345678911, "123.456.789-11", "Admin"), 
("Rafael Damiam","!@#$%", "rafael.damiam23@gmail.com", 12345678911, "123.456.789-12","Admin"),
("Danilo Bueno","!@#$%", "danilo@danilo.com", 12345676311, "123.456.789-13","Admin"),
("Amanda", "12345","amanda@amanda.com", 12345678911, "123.456.789-12", "User");

INSERT INTO Produto(NomeProduto, Descricao, Unidades, Imagem, Preco) 
VALUES
("Galaxy J7 PRO", "<br>Marca: Samsung <br>Sistema operacional: Android <br>Tamanho da tela: Tela de 5,5 polegadas <br>Atributos de segurança: Impressão digital <br>Resolução da câmera traseira: 13 megapixels <br>Recurso: 4G LTE", 1000,"https://havan.vteximg.com.br/arquivos/ids/3243601-1200-1200/smartphone-galaxy-j7-pro-j730g-dual-chip-samsung-2-62.jpg?v=636494490365000000", 1700),
("Galaxy J5 PRO", "O Samsung Galaxy J5 Pro é um smartphone Android de bom nível, ótimo para fotos, que pode satisfazer até o mais exigente dos usuários. Tem uma grande tela Touchscreen de 5.2 polegadas com uma resolução de 1280x720 pixels. Sobre as características deste Samsung Galaxy J5 Pro na verdade não falta nada. ", 1000,"https://www.extra-imagens.com.br/Control/ArquivoExibir.aspx?IdArquivo=851475140", 700),
("Nokia 8 Sirocco","O Nokia 8 Sirocco é um smartphone Android com características inovadoras que o tornam uma excelente opção para qualquer tipo de utilização. A tela de 5.5 polegadas coloca esse Nokia no topo de sua categoria.", 1000,"https://www.gizmochina.com/wp-content/uploads/2018/02/Nokia-8-Sirocco-500x500.jpg", 1450);