CREATE DATABASE projeto_php;
USE projeto_php;

CREATE TABLE usuario (
id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
usuario VARCHAR(50), 
senha VARCHAR (50), 
cargo VARCHAR(50));

SELECT * FROM usuario;