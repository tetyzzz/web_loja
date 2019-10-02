DROP DATABASE mvcd;
CREATE DATABASE mvcd;

USE mvcd;

CREATE TABLE IF NOT EXISTS `mvcd`.`usuario` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `senha` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `papel` VARCHAR(100) NOT NULL DEFAULT 'usuario'
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 24
DEFAULT CHARACTER SET = utf8

INSERT INTO `mvcd`.`usuario` (`nome`, `senha`, `email`, `papel`) VALUES ('admin', '123', 'admin@admin', 'admin');
INSERT INTO `mvcd`.`usuario` (`nome`, `senha`, `email`, `papel`) VALUES ('usuario', '123', 'usuario@usuario', 'usuario');



//////////////////////////


create database web_loja;

use web_loja;

create table cliente(
	id integer not null auto_increment,
	email varchar(40) not null,
	senha varchar(20) not null,
	primary key (id));

create table produto(
idproduto integer not null auto_increment,
idcategoria int not null,
nome varchar(100) not null,
descricao varchar (200),
quantidade int not null,
preco double not null,
primary key (idproduto),
foreign key (idcategoria) references categorias (idcategoria) on delete cascade on update cascade);

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
foreign key (id) references cliente (id) on delete cascade on update cascade);


create table categorias(
idcategoria int not null auto_increment,
categoria varchar(20) not null,
descricao varchar(200) not null,
subcategoria varchar(40) not null,
primary key (idcategoria));


create table cupom(
idcupom int not null auto_increment,
nomecupom varchar(60) not null,
desconto int(11) not null,
primary key (idcupom)
);
