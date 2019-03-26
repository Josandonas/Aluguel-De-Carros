/* 
drop database gerenciamento;
*/
create database gerenciamento;
use gerenciamento; 


create table if not exists Cliente(
cpf char(11),
email varchar(45),
senha varchar(45),
primary key(cpf)
);

create table if not exists Caracteristica(
id int not null auto_increment,
ar_condicionado tinyint,
automatico tinyint,
manual tinyint,
trava_eletrica tinyint,
vidro_eletrico tinyint,
primary key(id)
);

create table if not exists Endereco(
id int not null auto_increment,
cidade varchar(45),
estado varchar(45),
rua varchar(45),
numero int,
cep varchar(45),
primary key(id)
);

create table if not exists Agencia(
cnpj char(14),
razaoSocial varchar(45),
endereco int,
primary key(cnpj),
constraint fk_indereco foreign key(endereco) references Endereco(id)
);

create table if not exists Categoria(
id int not null auto_increment,
nomeCategoria varchar(45),
caracteristica int,
primary key(id),
constraint fk_caracteristica foreign key(caracteristica) references Caracteristica(id)
);

create table if not exists Carros(
id int not null auto_increment,
nome varchar(45),
modelo varchar(45),
categoria int,
agencia char(14),
valor float,
disponivel tinyint,
imagem longblob,
primary key(id),
constraint fk_categoria foreign key(categoria) references Categoria(id),
constraint fk_agencia foreign key(agencia) references Agencia(cnpj)
);

create table if not exists Aluguel(
id int not null auto_increment,
cliente char(11),
carro int,
data_inicio timestamp,
data_fim timestamp,
valor_total float,
primary key(id),
constraint fk_cliente foreign key(cliente) references Cliente(cpf),
constraint fk_carro foreign key(carro) references Carros(id)
);