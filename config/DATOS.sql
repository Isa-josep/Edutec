CREATE DATABASE Proyect_c;
USE Proyect_c;
CREATE TABLE Usuarios(
    User_Id INT NOT NULL AUTO_INCREMENT ,
    UserName TEXT NOT NULL ,
    UserGmail TEXT NOT NULL,
    UserPassword TEXT NOT NULL,
    UserEstado BOOLEAN,
    PRIMARY KEY (User_Id)
);

