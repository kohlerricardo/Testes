create table usuario(
id_usuario integer auto_increment primary key,
username varchar(110) not null unique,
password varchar (250)not null,
nome varchar(50),
);

insert into usuario values (default,'',sha1(),'');
select * from usuario