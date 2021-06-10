CREATE DATABASE P3T1_18100245;
USE P3T1_18100245;

CREATE TABLE usuario
(
id_usuario smallint auto_increment,
nombre varchar(50) not null,
apellido_paterno varchar(30) not null,
apellido_materno varchar(30) not null,
usuario varchar(50) not null,
contraseña varchar (50) not null,
primary key (id_usuario)
);

INSERT INTO usuario VALUES (null,'Jesus Antonio','Villanueva','Hidalgo','jesus','30d956a15329a41d17fa34c23e0f0951');/*villanueva*/

INSERT INTO usuario VALUES (null,'Yessica','Gutierrez','Escobar','yessica','f7ea063ab0850599aa129191022cdb59');/*gutierrez*/

INSERT INTO usuario VALUES (null,'Pedro','Mendoza','Torres','pedro','cfcd7931ab079ae3848355f2a7e0615f');/*mendoza*/