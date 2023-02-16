create database dbCar ;

use dbCar;

create table tbCar(
codCar int not null auto_increment,
modeloCar varchar(100),
marcaCar varchar(100),
anoCar date(),
valorCar decimal(7,2),
primary key(codCar));