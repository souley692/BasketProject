CREATE TABLE Administrateur(
                               idAdmin int NOT NULL AUTO_INCREMENT ,
                               nomAdmin VARCHAR(30),
                               preAdmin VARCHAR(30),
                               dateAdmin DATETIME,
                               logAdmin VARCHAR(20),
                               mdpAdmin VARCHAR(20),
                               constraint Administrateur_Pk PRIMARY Key (idAdmin)
) ENGINE=INNODB;

CREATE TABLE Gestincompetion(
                                idComp int NOT NULL AUTO_INCREMENT ,
                                date_debutComp DATETIME,
                                date_finComp DATETIME,
                                nb_match_maxcom int,
                                constraint Gestincompetion_Pk PRIMARY Key (idComp)
)ENGINE=INNODB;

CREATE TABLE GestionMatch(
                             idMatch int  NOT NULL AUTO_INCREMENT ,
                             scoreMatch VARCHAR(10),
                             jourMatch DATETIME,
                             vainMatch VARCHAR(50),
                             constraint GestionMatch_Pk PRIMARY KEY(idMatch)
)ENGINE=INNODB;

CREATE TABLE Consultant(
                           idConsu int NOT NULL AUTO_INCREMENT ,
                           nomConsu VARCHAR(30),
                           preconsu VARCHAR(30),
                           dateConsu DATETIME,
                           logConsu VARCHAR(20),
                           mdpConsu VARCHAR(20),
                           constraint Consultant_Pk PRIMARY KEY(idConsu)
)ENGINE=INNODB;

CREATE TABLE Gerant(
                       idGerant int NOT NULL AUTO_INCREMENT ,
                       nomGerant VARCHAR(30),
                       preGerant VARCHAR(30),
                       dateGerant DATETIME,
                       logGerant VARCHAR(20),
                       mdpGerant VARCHAR(20),
                       idComp int,
                       constraint Gerant_PK PRIMARY KEY(idGerant),
                       constraint Gerant_FK FOREIGN KEY(idComp) REFERENCES Gestincompetion(idComp)
)ENGINE=INNODB;

CREATE TABLE Club(
                     IdClub int NOT NULL AUTO_INCREMENT ,
                     locClub VARCHAR(40),
                     nomClub VARCHAR(30),
                     gerantClub VARCHAR(30),
                     joeursClub VARCHAR(30),
                     idMatch int ,
                     idGerant int,
                     constraint Club_PK PRIMARY KEY(IdClub),
                     constraint Club_FK FOREIGN KEY(idMatch) REFERENCES GestionMatch(idMatch),
                     constraint Club_CK FOREIGN KEY(idGerant) REFERENCES Gerant(idGerant)
)ENGINE=INNODB;

CREATE TABLE Joueur(
                       idJoueur int NOT NULL AUTO_INCREMENT ,
                       nomJoueur VARCHAR(30),
                       preJoueur VARCHAR(30),
                       dateJoueur DATETIME,
                       IdClub int ,
                       constraint Joueur_PK PRIMARY KEY(idJoueur),
                       constraint Joueur_FK FOREIGN KEY(IdClub) REFERENCES Club(IdClub)
)ENGINE=INNODB;

CREATE TABLE gagner(
                       IdClub int ,
                       idMatch int,
                       constraint gagner_PK PRIMARY KEY(IdClub, idMatch),
                       constraint gagner_FK FOREIGN KEY(IdClub) REFERENCES Club(IdClub),
                       constraint gagner_CK FOREIGN KEY(idMatch) REFERENCES GestionMatch(idMatch)
)ENGINE=INNODB;

CREATE TABLE crée(
                     idComp int ,
                     idMatch int,
                     constraint crée_PK PRIMARY KEY(idComp, idMatch),
                     constraint crée_FK FOREIGN KEY(idComp) REFERENCES Gestincompetion(idComp),
                     constraint crée_CK FOREIGN KEY(idMatch) REFERENCES GestionMatch(idMatch)
)ENGINE=INNODB;