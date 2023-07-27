create database biblioteca;
use biblioteca;

create table livro (
cod_livro int primary key auto_increment,
titulo varchar(100) not null,
escritor varchar(100) not null,
ano varchar(100) not null,
editora varchar(100) not null
);

create table usuario (
cod_usuario int primary key auto_increment,
usuario varchar(100) not null,
senha varchar(100) not null
);

select * from usuario;

drop table usuario;