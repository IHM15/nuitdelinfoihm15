#BASE de donnée Nuit de l'info



CREATE DATABASE  ihm5


CREATE TABLE personne (
    id_personne  SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
    nom varchar(40) NOT NULL,
 	prenom  varchar(40) NOT NULL,
   	mail varchar(40) NOT NULL,
   	tel varchar(10),
   	mdp varchar(255) ,
   	dv boolean,
    PRIMARY KEY (id_personne)

)



CREATE TABLE role (
    id_role  SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
    nom_role varchar(40) NOT NULL,
    PRIMARY KEY (id_role)
)


CREATE TABLE persoRole (
   id_role SMALLINT UNSIGNED NOT NULL,
   id_pers SMALLINT UNSIGNED NOT NULL,

    PRIMARY KEY (id_role,id_pers),
     FOREIGN KEY (id_role) 
        REFERENCES role(id_role),
         FOREIGN KEY (id_pers) 
        REFERENCES personne( id_personne)
        ON DELETE CASCADE
)



create table typeEvt(
id_typeEvt SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
nomTypeEvt varchar(60) NOT NULL,
 PRIMARY KEY (id_typeEvt)
)


CREATE TABLE evenement (
    id_evt  SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
    nom_evt varchar(40) NOT NULL,
    dateDeb DATETIME NOT NULL,
    dateFin DATE,
    resumer varchar(124),
    description varchar(1024),
	id_typeEvt SMALLINT UNSIGNED NOT NULL,

    PRIMARY KEY (id_evt),
     FOREIGN KEY (id_typeEvt) 
        REFERENCES  typeEvt(id_typeEvt)
)

create table message(
	id_pers SMALLINT UNSIGNED NOT NULL ,
	id_evt SMALLINT UNSIGNED NOT NULL ,
	timeMsg DATETIME NOT NULL ,
	img_blob BLOB,
	PRIMARY key (id_pers,id_evt,timeMsg),

	  FOREIGN KEY (id_pers) 

        REFERENCES personne(id_personne),

 FOREIGN KEY (id_evt) 
        REFERENCES evenement(id_evt)
        ON DELETE CASCADE
)

