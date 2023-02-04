create database Livraria;

use Livraria;

create table Cliente(
codigo int auto_increment not null,
nome varchar(150) not null,
endereco varchar(150) not null,
telefone bigint(11) not null,
dataNascimento date not null,
login varchar(20) not null,
senha varchar(8) not null
)Engine = InnoDB;

create table Livro(
codigo int auto_increment not null,
nomeLivro varchar(150) not null,
autorLivro varchar(150) not null,
    public float $valorLivro;
    public float $quantidadeLivro;
)Engine = InnoDB;