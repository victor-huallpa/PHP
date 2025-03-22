CREATE DATABASE hotel
    DEFAULT CHARACTER SET = 'utf8mb4';
USE hotel;
CREATE TABLE personal(  
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'Primary Key',
    created DATETIME COMMENT 'Create Time',
    modified DATETIME COMMENT 'Update Time',
    nombres VARCHAR(50) COMMENT 'name',
    apellidos VARCHAR(50) COMMENT 'lastname',
    cargo VARCHAR(50) COMMENT 'cargo',
    dni VARCHAR(50) UNIQUE,
    correo VARCHAR(50) UNIQUE,
    celular VARCHAR(50) UNIQUE
) DEFAULT CHARSET UTF8 COMMENT '';