CREATE DATABASE proyectoC  ;  

USE  proyectoC ; 


CREATE TABLE  USER  (
    id INT   NOT NULL AUTO_INCREMENT , 
    Correo TEXT NOT  NULL , 
    pass TEXT NOT  NULL , 
    NombreUsuario TEXT NOT  NULL ,
    Roll TEXT NOT  NULL , -- Estudiante , Profesor , Acesor  , Secretario  
    PRIMARY KEY(id) 
);

CREATE TABLE PostPublic (
    id INT  NOT  NULL AUTO_INCREMENT , 
    postJSON TEXT  NOT NULL  , 
    Titulopost TEXT  NOT NULL ,
    PostText TEXT  NOT NULL  , 
    UserId INT  NOT  NULL ,
    PRIMARY KEY(id)   
); 

CREATE TABLE circulo (
    id INT NOT NULL  AUTO_INCREMENT ,
    titulo TEXT NOT  NULL , 
    UserId INT NOT NULL ,
    CirculeContentId INT  NOT  NULL , 
    PRIMARY KEY(id) 
) ;


CREATE  TABLE CirculeContent  (
    id INT  NOT NULL  AUTO_INCREMENT ,
    UserId INT  NOT NULL , 
    Contenido TEXT NOT NULL  , -- markdownText 
    PRIMARY KEY(id) 
);


CREATE TABLE Preguntas (
    id INT NOT  NULL AUTO_INCREMENT , 
    UserId INT NOT NULL  , 
    Pregunta TEXT NOT NULL  , 
    answers TEXT NOT NULL ,  
    PRIMARY KEY(id) 
) ; 



INSERT INTO USER (NombreUsuario,Correo,pass,Roll)  VALUES  
('ISA_JOSEP'  , 'isaurini1902@gmail.com' , 'ISA1902', 'Profesor') ; 
('MarcoA'  , 'marco1101777@gmail.com' , 'bWFyY292OjExMDE3N+sd', 'Profesor') ; 
