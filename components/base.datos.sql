create database proyecto(
   create table institucion
   (
      CUE int primary key not null,
      nombre varchar(30) not null,
      gestion boolean,
      especialidad varchar(50),
      foreign key ID references locXinst
   )

   create table carrera
   (
      ID int primary key not null auto incremental,
      nombre varchar(30) not null,
      years int not null,
      alcance varchar(40),
      foreign key CUE references institucion
   )

   create table localidad
   (
      id_local int primary key not null auto incremental,
      barrio varchar(40) not null,
      domicilio varchar(25) not null,
      ciudad varchar(25),
      foreign key CUE references locXinst
   )

   create table locXinst
   (
      CUE int primary key not null,
      ID int primary key not null,
      foreign key CUE references institucion
      foreign key ID references localidad
   )
)