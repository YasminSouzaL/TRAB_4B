

CREATE TABLE usuario(
  nome  varchar (50) Not Null,
  idade  varchar (10),
  sexo   varchar (10),
  login varchar(50) primary key,
  senha varchar(50) Not Null
);

insert into usuario values ('Bianca','30','f','bpedrosa@ifsp.edu.br', md5('123'));
Insert into usuario values ('Felipe','23','m','admin@ifsp.edu.br', md5('123'));
Insert into usuario values ('João','15','m','joao@ifsp.edu.br', md5('123'));

