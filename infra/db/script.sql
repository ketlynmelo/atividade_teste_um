<-- Cria o banco de dados com o nome -->
CREATE DATABASE sistema_simples;

<-- Seleciona ele para o uso -->
USE sistema_simples;

<-- Cria uma tabela dentro do banco de dados com o nome de usuarios -->
CREATE TABLE usuario (
    <-- nomes das sessoes dentro da tabela -->
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL
);
<-- Adiciona os valores nas variaveis mencionadas -->
INSERT INTO usuario (usuario, senha) VALUE ('admin','123');