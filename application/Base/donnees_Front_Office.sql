

INSERT INTO genre VALUES (default ,'Homme');
INSERT INTO genre VALUES (default ,'Femme');


INSERT INTO profil VALUES (default,'Vahatra',2,160,60);
INSERT INTO profil VALUES (default,'Nomena',1,165,65);
INSERT INTO profil VALUES (default,'Mirindra',2,156,50);
INSERT INTO profil VALUES (default,'Faniriana',1,165,65);
INSERT INTO profil VALUES (default,'Miharitiana',1,155,55);

INSERT INTO typeObjectif VALUES (default,'augmentation du poids');
INSERT INTO typeObjectif VALUES (default,'reduction du poids');

INSERT INTO objectif VALUES (default,1,1,70,'2023-07-01');
INSERT INTO objectif VALUES (default,1,2,70,'2023-07-02');
INSERT INTO objectif VALUES (default,1,3,55,'2023-07-04');
INSERT INTO objectif VALUES (default,2,4,70,'2023-07-05');
INSERT INTO objectif VALUES (default,2,5,50,'2023-07-06');

INSERT INTO code VALUES(default,00110,15000);
INSERT INTO code VALUES(default,00111,15000);
INSERT INTO code VALUES(default,00112,15000);
INSERT INTO code VALUES(default,00113,15000);
INSERT INTO code VALUES(default,00114,15000);
INSERT INTO code VALUES(default,00115,10000);
INSERT INTO code VALUES(default,00116,10000);
INSERT INTO code VALUES(default,00117,10000);
INSERT INTO code VALUES(default,00118,10000);
INSERT INTO code VALUES(default,00119,10000);
INSERT INTO code VALUES(default,00120,20000);
INSERT INTO code VALUES(default,00121,20000);
INSERT INTO code VALUES(default,00122,20000);
INSERT INTO code VALUES(default,00123,20000);
INSERT INTO code VALUES(default,00124,20000);

INSERT INTO entreeMonnaie VALUES(default,1,1,1);
INSERT INTO entreeMonnaie VALUES(default,2,2,1);
INSERT INTO entreeMonnaie VALUES(default,3,3,0);
INSERT INTO entreeMonnaie VALUES(default,4,4,0);
INSERT INTO entreeMonnaie VALUES(default,5,5,1);

INSERT INTO achatRegime VALUES (default,1,15000,'2023-07-01','2023-08-01');
INSERT INTO achatRegime VALUES (default,2,10000,'2023-08-01','2023-08-10');
INSERT INTO achatRegime VALUES (default,3,20000,'2023-09-10','2023-09-20');
INSERT INTO achatRegime VALUES (default,4,15000,'2023-10-01','2023-10-20');
INSERT INTO achatRegime VALUES (default,5,20000,'2023-07-01','2023-08-01');
 
delete from genre;
delete from profil;
delete from typeObjectif;
delete from objectif;
delete from code;
delete from entreeMonnaie;
delete from achatRegime;

alter sequence achatregime_id_seq  restart with 1;
alter sequence code_id_seq  restart with 1;
alter sequence entreemonnaie_id_seq  restart with 1;
alter sequence genre_id_seq  restart with 1;
alter sequence objectif_id_seq  restart with 1;
alter sequence profil_id_seq  restart with 1;
alter sequence typeobjectif_id_seq  restart with 1;

