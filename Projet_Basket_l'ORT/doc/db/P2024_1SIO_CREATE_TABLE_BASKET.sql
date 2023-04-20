CREATE TABLE Administrateur(
                               idAdmin int,
                               nomAdmin VARCHAR(30),
                               preAdmin VARCHAR(30),
                               dateAdmin DATE,
                               logAdmin VARCHAR(20),
                               mdpAdmin VARCHAR(20),
                               constraint Administrateur_Pk PRIMARY Key (idAdmin)
) ENGINE=INNODB;

CREATE TABLE Gestincompetion(
                                idComp int,
                                date_debutComp DATE,
                                date_finComp DATE,
                                nb_match_maxcom int,
                                constraint Gestincompetion_Pk PRIMARY Key (idComp)
)ENGINE=INNODB;

CREATE TABLE GestionMatch(
                             idMatch int,
                             scoreMatch VARCHAR(10),
                             jourMatch DATE,
                             vainMatch VARCHAR(50),
                             constraint GestionMatch_Pk PRIMARY KEY(idMatch)
)ENGINE=INNODB;

CREATE TABLE Consultant(
                           idConsu int,
                           nomConsu VARCHAR(30),
                           preconsu VARCHAR(30),
                           dateConsu DATE,
                           logConsu VARCHAR(20),
                           mdpConsu VARCHAR(20),
                           constraint Consultant_Pk PRIMARY KEY(idConsu)
)ENGINE=INNODB;

CREATE TABLE Gerant(
                       idGerant int,
                       nomGerant VARCHAR(30),
                       preGerant VARCHAR(30),
                       dateGerant DATE,
                       logGerant VARCHAR(20),
                       mdpGerant VARCHAR(20),
                       idComp int,
                       constraint Gerant_PK PRIMARY KEY(idGerant),
                       constraint Gerant_FK FOREIGN KEY(idComp) REFERENCES Gestincompetion(idComp)
)ENGINE=INNODB;

CREATE TABLE Club(
                     IdClub int ,
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
                       idJoueur int,
                       nomJoueur VARCHAR(30),
                       preJoueur VARCHAR(30),
                       dateJoueur DATE,
                       IdClub int ,
                       constraint Joueur_PK PRIMARY KEY(idJoueur),
                       constraint Joueur_FK FOREIGN KEY(IdClub) REFERENCES Club(IdClub)
)ENGINE=INNODB;

CREATE TABLE gagner(
                       IdClub int,
                       idMatch int,
                       constraint gagner_PK PRIMARY KEY(IdClub, idMatch),
                       constraint gagner_FK FOREIGN KEY(IdClub) REFERENCES Club(IdClub),
                       constraint gagner_CK FOREIGN KEY(idMatch) REFERENCES GestionMatch(idMatch)
)ENGINE=INNODB;

CREATE TABLE crée(
                     idComp int,
                     idMatch int,
                     constraint crée_PK PRIMARY KEY(idComp, idMatch),
                     constraint crée_FK FOREIGN KEY(idComp) REFERENCES Gestincompetion(idComp),
                     constraint crée_CK FOREIGN KEY(idMatch) REFERENCES GestionMatch(idMatch)
)ENGINE=INNODB;