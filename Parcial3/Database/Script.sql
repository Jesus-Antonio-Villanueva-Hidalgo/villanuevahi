CREATE DATABASE p3_tarea1;
USE p3_tarea1;

CREATE TABLE usuario
(
id_usuario smallint auto_increment,
nombre varchar(50) not null,
apellido_paterno varchar(30) not null,
apellido_materno varchar(30) not null,
correo varchar(50) not null,
contraseña varchar (30) not null,
constraint PK_USUARIO primary key (id_usuario)
);

INSERT INTO usuario VALUES (null,'Jesus Antonio','Villanueva','Hidalgo','jesus@gmail.com','Blitz');