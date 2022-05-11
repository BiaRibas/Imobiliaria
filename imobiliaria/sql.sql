create database imobiliaria;
use imobiliaria;

create table imovel(
	id int primary key auto_increment,
	descricao varchar(200) not null,
	foto varchar(30),
	valor decimal (9,2),
	tipo char(1)
);

create table usuario(
	id int auto_increment PRIMARY key,
	login varchar(10),
	senha varchar(100),
	permissao char(1)
);

create table visualizacao(
	id int auto_increment PRIMARY key,
	idUsuario int,
	idImovel int,
	data date,
	hora time,
	FOREIGN key (idUsuario) REFERENCES usuario(id),
	FOREIGN key (idImovel) REFERENCES imovel(id)
);

select * from usuario;