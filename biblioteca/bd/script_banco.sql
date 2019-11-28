DROP DATABASE IF EXISTS web_loja;

create database web_loja;

use web_loja;

create table cliente(
    id integer not null auto_increment,
    nome varchar(60) not null,
    email varchar(60) not null,
    senha varchar(20) not null,
    cpf varchar(60) not null,
    ddn varchar(10) not null,
    tipo varchar(50) not null,
    primary key (id)
);

create table produto(
    idproduto integer not null auto_increment,
    idcategoria int not null,
    nome varchar(100) not null,
    descricao varchar (200),
    quantidade int not null,
    preco double not null,
    image varchar(300) not null,
    primary key (idproduto),
    foreign key (idcategoria) references categorias (idcategoria) on delete cascade on update cascade
);

create table endereco(
    idendereco int(11) not null auto_increment,
    id int(11) not null,
    logradouro varchar(60) not null,
    numero varchar(7) not null,
    complemento varchar(60),
    bairro varchar(60) not null,
    cidade varchar(60) not null,
    cep varchar(60) not null,
    primary key (idendereco),
    foreign key (id) references cliente (id) on delete cascade on update cascade
);

create table categorias(
    idcategoria int not null auto_increment,
    categoria varchar(20) not null,
    descricao varchar(200) not null,
    subcategoria varchar(40) not null,
    primary key (idcategoria)
);

create table cupom(
    idcupom int not null auto_increment,
    nomecupom varchar(60) not null,
    desconto int(11) not null,
    primary key (idcupom)
);

create table FormaPagamento(
    idFormaPagamento int not null auto_increment,
    descricao varchar(60) not null,
    primary key (idFormaPagamento)
);

CREATE TABLE pedido (
    idpedido INT NOT NULL AUTO_INCREMENT,
    idcliente INT NOT NULL,
    idendereco INT NOT NULL,
    idFormaPagamento INT NOT NULL,
    DataCompra date not null,
    PRIMARY KEY(idpedido),
    FOREIGN KEY(idcliente) REFERENCES cliente(idcliente) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY(idendereco) REFERENCES endereco(idendereco) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY(idFormaPagamento) REFERENCES FormaPagamento(idFormaPagamento) ON UPDATE CASCADE ON DELETE CASCADE
);

create table pedido_produto (
idProduto int not null,
idPedido int not null,
quantidade int not null,
primary key (idProduto, idPedido),
foreign key (idProduto) references produto (idProduto) on delete cascade on update cascade,
foreign key (idPedido) references pedido (idPedido) on delete cascade on update cascade
);


-- STORED PROCEDURES
-- Pedidos por dataCompra
    DROP PROCEDURE IF EXISTS sp_PedidosByDataCompra;
    DELIMITER $$
        CREATE PROCEDURE sp_PedidosByDataCompra (v_dataCompra DATE)
        BEGIN
            SELECT * 
            FROM pedido 
            WHERE dataCompra = v_dataCompra;
        END; $$
    DELIMITER ;

-- Pedidos por Cidade
    DROP PROCEDURE IF EXISTS sp_PedidosPorCidade;
    DELIMITER $$
        CREATE PROCEDURE sp_PedidosPorCidade (v_cidade VARCHAR(30))
        BEGIN
            SELECT pedido.*
            FROM pedido
            INNER JOIN usuario
            ON pedido.idUsuario = usuario.idUsuario
            INNER JOIN endereco
            ON usuario.idUsuario = endereco.idUsuario
            WHERE endereco.cidade = v_cidade;
        END; $$
    DELIMITER ;


--colocar cliente como adm 
update cliente set tipo = 'admin' where id=1;

--pedido por cidade
select cliente.cpf, pedido.idPedido, pedido.dataCompra, endereco.cep from cliente
    inner join pedido 
    on cliente.id=pedido.id
    inner join endereco 
    on pedido.idendereco=endereco.idendereco 
    where endereco.cidade=aCidade;