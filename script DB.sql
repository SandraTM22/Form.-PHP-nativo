create database registro;

create table alumnos(
id int(10) primary key not null unique auto_increment,
dni int(9) unique not null,
nombre varchar(20) not null,
apellido1 varchar(25) not null,
apellido2 varchar(25) not null,
telefono int(9),
direccion varchar(100)
);