create database db_sistema;

use db_sistema;

create table pessoa(
	id int auto_increment,
	nome varchar(255) not null,
	rg varchar(45) not null,
	cpf char(11) not null,
	data_nascimento date not null,
	email varchar(255),
	telefone varchar(11),
	endereco varchar(255) not null,
    primary key(id)
);

create table categoria_produto(
	id int auto_increment,
    descricao varchar(150) not null,
    primary key(id)
);

create table produto(
	id int auto_increment,
    nome varchar(250) not NULL,
    preco double not null,
	descricao text not null,
    id_categoria_produto int,
    primary key(id),
    foreign key(id_categoria_produto) references categoria_produto(id)
);

CREATE TABLE funcionario (
	id int auto_increment,
    nome varchar(255) NOT NULL,
    sexo varchar(10) NOT NULL,
    rg varchar(45) NOT NULL,
    cpf char(11) NOT NULL,
    data_nascimento date NOT NULL,
    PRIMARY KEY(id)
);