CREATE DATABASE plantgestor;

USE plantgestor;


CREATE TABLE usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);


CREATE TABLE cultivo (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tipoCultivo VARCHAR(100) NOT NULL,
    dataCultivo DATE NOT NULL,
    quantidadeCultivo INT NOT NULL,
    areaCultivo DECIMAL(10,2) NOT NULL,
    usuario_id INT,
    FOREIGN KEY (usuario_id) REFERENCES usuario(id)
        ON DELETE CASCADE
        ON UPDATE CASCADE
        );