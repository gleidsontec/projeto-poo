create database estudio;

use estudio;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE serviço (
    id INT AUTO_INCREMENT primary key,
    nome VARCHAR(255)
);

select * from serviço;
select * from users;

drop database estudio;



