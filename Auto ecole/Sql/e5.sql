DROP DATABASE IF EXISTS CASTELLANE;
CREATE DATABASE IF NOT EXISTS CASTELLANE;
USE CASTELLANE;


create table if not exists user (
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
	
CREATE TABLE IF NOT EXISTS CLIENT
 (
   N_CLIENT INT(10) auto_increment,
   NOM_CLIENT varchar(30) NOT NULL ,
   PRENOM_CLIENT varchar(50)  ,
   ADRESSE_CLIENT varchar(50) ,
   DATE_DE_NAISSANCE DATE NULL,
   TELEPHONE varchar(20) ,
   DATE_INSCRIPTION DATE NULL,
   MODE_FACTURATION varchar(30) NULL,
   PRIMARY KEY (N_CLIENT) 
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



CREATE TABLE IF NOT EXISTS VOITURE
 (
   N_VOITURE INT(10) auto_increment ,
   IMMATRICULATION varchar(40) NOT NULL  ,
   MODELE_VOITURE varchar(50) NOT NULL  ,
   ANNEE_MODELE DATE NULL,
    PRIMARY KEY (N_VOITURE) 
 ) ;



CREATE TABLE IF NOT EXISTS COURS
 (
   ID_COURS INTEGER(2) NOT NULL auto_increment ,
   N_CLIENT INTEGER(10) NOT NULL  ,
   N_MONITEUR INTEGER(10) NOT NULL  ,
   N_VOITURE INTEGER(10) NOT NULL  ,
   DATE_HEURE_DEBUT DATETIME NULL  ,
   DATE_HEURE_FIN DATETIME NULL  
   , PRIMARY KEY (ID_COURS), 
  FOREIGN KEY (N_CLIENT) REFERENCES CLIENT(N_CLIENT) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (N_MONITEUR) REFERENCES MONITEUR(N_MONITEUR) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (N_VOITURE) REFERENCES VOITURE(N_VOITURE) ON DELETE CASCADE ON UPDATE CASCADE
 ) ;
