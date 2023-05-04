INSERT into Administrateur (idAdmin,nomAdmin,preAdmin,dateAdmin,logAdmin,mdpAdmin) values
                                                                                       (254,'Kaci','Branis','2004-04-17','adminbk','adminbk'),
                                                                                       (255,'Fromagé','Anthony','2003-01-20','adminaf','adminaf'),
                                                                                       (256,'Thirard','Soulayman','2002-01-09','adminst','adminst'),
                                                                                       (257,'tran','Hieu','2004-04-17','adminht','adminht');

INSERT into Gestincompetion(idComp,date_debutComp,date_finComp ,nb_match_maxcom) values
                                                                                     (17001,'2023-04-26','2023-05-27',5),
                                                                                     (17002,'2024-11-27','2024-12-28',10),
                                                                                     (17003,'2026-04-30','2026-06-15',10),
                                                                                     (17004,'2027-02-13','2027-04-28',20);

INSERT into GestionMatch(idMatch,scoreMatch,jourMatch ,vainMatch) values
                                                                      (5001,'120-90','2023-04-26','Lakers'),
                                                                      (5002,'70-90','2023-06-26','Chicago Bulls'),
                                                                      (5003,'100-70','2023-04-26','Lakers'),
                                                                      (5004,'120-90','2023-04-26','Warriors Goldelden state');

Insert into Consultant(idConsu ,nomConsu,preconsu,dateConsu,logConsu ,mdpConsu) values
                                                                                    (9001,'Goudet','Magali','1992-02-24','Mgoudet','azerty'),
                                                                                    (9002,'Bousquet','Gerad','1992-02-24','Gbousquet','12345');

INSERT into Gerant(idGerant ,nomGerant ,preGerant ,dateGerant ,logGerant ,mdpGerant ,idComp) values
                                                                                                 (4001,'Rob','Pelinka','1969-12-23','Rpelinka','12345',17001),
                                                                                                 (4002,'Dick','Klein','1941-04-11','Dklein','123456',17001),
                                                                                                 (4003,'Joe', 'Lacob','1956-01-10','Jlacob','1234567',17001);

INSERT into Club(IdClub ,locClub,nomClub ,gerantClub ,joeursClub,idMatch ,idGerant ) values
                                                                                         (1011,'Los angeles','Lakers','Rob Pelinka',5,5001,4001),
                                                                                         (1012,'Chicago','Chicago Bulls', 'Dick Klein',5,5002,4002),
                                                                                         (1013,'californie','Warriors Goldelden state','Joe Lacob',5,5004,4003);

INSERT into Joueur(idJoueur ,nomJoueur ,preJoueur ,dateJoueur ,IdClub ) values
                                                                            (1,'Kobe','Bryant','1978-08-23',1011),
                                                                            (2,'Lebron','James','1984-12-30',1011),
                                                                            (3,'Stephant','Curry','1988-04-14',1011),
                                                                            (4,'Anthony','Davis','1993-04-11',1011),
                                                                            (5,'DAngelo','Russell','1996-02-23',1011),
                                                                            (6,'Lonzo','Ball','1997-10-27',1012),
                                                                            (7,'Pactrick','Beverley','1988-07-12',1012),
                                                                            (8,'Alex','Caruso','1994-11-28',1012),
                                                                            (9,'DeMar','DeRozan','1989-08-07',1012),
                                                                            (10,'Ayo','Dosunmu','2000-01-17',1012),
                                                                            (11,'Stephen','Curry','1988-03-18',1012),
                                                                            (12,'Klay','Thompson','1990-02-08',1012),
                                                                            (13,'Jordan','Poole','1999-06-19',1012),
                                                                            (14,'Draymon','Green','1990-03-04',1012),
                                                                            (15,'Andrew','Wiggins','1995-02-23',1012);

Insert into gagner(IdClub ,idMatch ) values
                                         (1011,5001),
                                         (1012,5002),
                                         (1011,5003),
                                         (1013,5004);

Insert into crée( idComp ,idMatch )  values
                                        (17001,5001),
                                        (17001,5002),
                                        (17001,5003),
                                        (17001,5004);











