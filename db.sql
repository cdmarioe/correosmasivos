create database clientes;
use clientes; 

create table correos (
	id int not null auto_increment primary key,
	nombre varchar(50) not null,
	apellido varchar(50) not null,
	empresa varchar(50) not null,
	correo varchar(255) not null,
	telefono varchar(60) not null,
	is_active boolean not null default 1,
	created_at datetime
);

INSERT INTO `correos`(`nombre`, `apellido`, `empresa`, `correo`, `telefono`, `is_active`, `created_at`) VALUES ('Mario','Cabrera','Wire-Less Solutions','mecabrerad@gmail.com','6631010804',1,NOW())