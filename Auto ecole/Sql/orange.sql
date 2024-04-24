drop database if exists orange;
create database orange;

use orange;

create table client (
    idclient int(3) not null auto_increment,
    nom varchar(50),
    prenom varchar(50),
    adresse varchar(50),
    email varchar(50),
    date_naiss date null,
    date_inscription date null,
    facture varchar (30),
    primary key (idclient)
)Engine=InnoDB;
   

create table produit (
    idproduit int(3) not null auto_increment,
    designation varchar(50),
    prixachat varchar(50),
    etat varchar(50),
    dateachat date,
    idclient int(3) not null,
    primary key (idproduit),
    foreign key (idclient) references client(idclient) ON DELETE CASCADE
ON UPDATE CASCADE
    ) ENGINE=InnoDB;


create table Examen (
    idexam int(3) not null auto_increment,
    type_exam varchar(50),
    date_exam date null,
    primary key (idexam)
)ENGINE=InnoDB;



create table user (
	iduser int(3) not null auto_increment, 
	nom varchar(50), 
	prenom varchar(50), 
	email varchar(50), 
	mdp varchar(255), 
	role enum("user", "admin"),
	primary key (iduser)
);
insert into USER values 
	(null, 'Adam', 'Anes', 'a@gmail.com', '123', 'user'); 
insert into user values 
	(null, 'Christina', 'Ibtissam', 'b@gmail.com', '456', 'admin'); 
  insert into user values (null,"Vata","Clement","clement@gmail.com","@zerty+123","user");
  insert into user values (null,"Ravelo","Nicolas","nico.ravelo@gmail.com","@zerty123","admin");
	



CREATE TABLE IF NOT EXISTS VOITURE
 (
   N_VOITURE INT(10) auto_increment ,
   IMMATRICULATION varchar(40) NOT NULL  ,
   MODELE_VOITURE varchar(50) NOT NULL  ,
   ANNEE_MODELE DATE NULL,
    PRIMARY KEY (N_VOITURE) 
 ) ;

CREATE TABLE IF NOT EXISTS MONITEUR
 (
   N_MONITEUR INT(10) auto_increment,
   NOM_MONITEUR varchar(30)  ,
   PRENOM_MONITEUR varchar(50)  ,
   ADRESSE_MONITEUR varchar(50) ,
   TELEPHONE varchar(20) ,
   PRIMARY KEY (N_MONITEUR) 
 ) ;
