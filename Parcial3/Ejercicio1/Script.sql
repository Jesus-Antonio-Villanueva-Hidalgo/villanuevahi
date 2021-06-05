CREATE DATABASE user_18100245;
USE user_18100245;

CREATE TABLE usuario
(
id_usuario smallint auto_increment,
nombre varchar(50) not null,
apellido_paterno varchar(30) not null,
apellido_materno varchar(30) not null,
correo varchar(50) not null,
contraseña varchar (50) not null,
primary key (id_usuario)
);

INSERT INTO usuario VALUES (null,'Jesus Antonio','Villanueva','Hidalgo','jesus@gmail.com','Blitz');

INSERT INTO usuario VALUES (null,'Yessica','Gutierrez','Escobar','yessica@outlook.com','Pr1ngles');

INSERT INTO usuario VALUES (null,'Pedro','Mendoza','Torres','pedro15@hotmail.com','Pass80');