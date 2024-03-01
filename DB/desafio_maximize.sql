/*Cria o banco de dados*/
CREATE DATABASE IF NOT EXISTS desafio_maximize DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE desafio_maximize; /*Seleciona o banco de dados a ser usado*/

/*drop database desafio_maximize;*/

/*Cria tabela das matérias*/
CREATE TABLE materia (
    ID bigint(20) NOT NULL 
    nome varchar(50) NOT NULL,
    descricao varchar(50) NOT NULL,
    texto_completo varchar(120) NOT NULL,
    imagem longbloob NOT NULL,
    data_de_publicacao date NOT NULL

    PRIMARY KEY(nome)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

