create database ventacasas;
use ventacasas;
 

create table duenio(
due_id int primary key auto_increment,
due_nombre varchar(30) not null,
due_telefono bigint not null,
due_email varchar(30) null,
due_direccion varchar(100) null
);

create table cliente(
cli_id int primary key auto_increment,
cli_nombre varchar(30) not null,
cli_telefono bigint(10) not null,
cli_nickname varchar(30) not null unique,
cli_password varchar(30) not null,
cli_email varchar(30) not null unique
);

create table vendedor(
vend_id int primary key auto_increment,
vend_fecha_registro date not null,
vend_nombre varchar(30) not null,
vend_telefono bigint not null,
vend_email varchar(30) not null,
vend_direccion varchar(30) null,
vend_estatus char(1) not null
);


create table casa(
cas_id int primary key auto_increment,
cas_fecha_registro date not null,
cas_estatus char(1) not null,
cas_direccion varchar(100) not null,
cas_metros2 int not null,
cas_precio decimal(15,2) not null,
cas_descripcion varchar(300) not null,
cas_foto varchar(50) not null,
cas_fecha_venta date null,
cas_due_id int not null references duenio(due_id)
);

create table venta(
vent_id int primary key auto_increment,
vent_fecha date not null,
vent_tipo_pago varchar(20) not null,
vent_total decimal(15,2) not null,
vent_comision decimal(15,2) null,
vent_cas_id int not null references casa(cas_id),
vent_cli_id int not null references cliente(cli_id),
vent_vend_id int not null references vendedor(vend_id)
);

create table cita(
cit_id int primary key auto_increment,
cit_fecha_cita date not null,
cit_hora_cita time(6) not null,
cit_cas_id int not null references casa(cas_id),
cit_vend_id int not null references vendedor(vend_id),
cit_cli_id int not null references cliente(cli_id)
);

create table agenda(
age_id int primary key auto_increment,
age_cit_id int not null references cita(cit_id),
age_cli_id int not null references cliente(cli_id),
age_cas_id int not null references casa(cas_id),
age_vend_id int not null references vendedor(vend_id)
);

create table administracion(
adm_id int primary key auto_increment,
adm_nombre varchar(30) not null,
adm_email varchar(30) not null,
adm_password varchar(30) not null
);