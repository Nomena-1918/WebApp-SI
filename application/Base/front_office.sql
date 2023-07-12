
    --FRONT-OFFICE--
CREATE TABLE genre(
    id serial PRIMARY KEY,
    nom varchar(50)
);

create table utilisateur(
    id serial PRIMARY KEY,
    nom varchar(50),
    idGenre int,
    dtn date,
    FOREIGN KEY (idGenre) REFERENCES genre(id)
);
alter table utilisateur add column email varchar(100);
alter table utilisateur add column mdp varchar(50);


CREATE TABLE profil(
    id serial primary key,
    idUtilisateur int unique,
    taille decimal,
    poids decimal,
    FOREIGN KEY (idUtilisateur) REFERENCES utilisateur(id)
);

/*
CREATE TABLE typeObjectif(
    id serial PRIMARY KEY,
    nom varchar(50)
);*/

CREATE TABLE objectif(
    id serial PRIMARY KEY,
    idTypeObjectif int,
    idUtilisateur int,
    valeurPoids decimal,
    dateDebut date,
    FOREIGN KEY (idTypeObjectif) REFERENCES typeObjectif(id),
    FOREIGN KEY (idUtilisateur) REFERENCES utilisateur(id)
);

CREATE TABLE code(
    id serial PRIMARY KEY,
    numero varchar(20) Unique,
    montant decimal,
    etat int
);

CREATE TABLE entreeMonnaie(
    id serial PRIMARY KEY,
    idCode int,
    idUtilisateur int,
    etat int,
    FOREIGN KEY (idCode) REFERENCES code(id),
    FOREIGN KEY (idUtilisateur) REFERENCES utilisateur(id)
);

create table service(
    id serial PRIMARY KEY,
    nom varchar(100) Unique
);

CREATE TABLE achatService(
    id serial PRIMARY KEY,
    idUtilisateur int,
    idservice int,
    somme decimal,
    dateDebut date,
    dateFin date,
    FOREIGN KEY (idUtilisateur) REFERENCES utilisateur(id),
    FOREIGN KEY (idservice) REFERENCES service(id)
);


--Somme depense
create view v_somme_depense_utilisateur as
select utilisateur.id, sum(achatService.somme) as sortie_monnaie
from achatService
join utilisateur on achatService.idUtilisateur = utilisateur.id
group by utilisateur.id
order by utilisateur.id;

--Somme entreemonnaie validée
create view v_somme_entreeMonnaie_utilisateur as
select utilisateur.id, sum(code.montant) as entre_monnaie
from entreeMonnaie
join utilisateur on utilisateur.id=entreeMonnaie.idUtilisateur
join code on code.id = entreeMonnaie.idCode
where entreeMonnaie.etat=1
group by utilisateur.id;

---- Valeur porte-monnaie actuelle d'un user (état transaction)
----------------------------------------
create view v_portemonnaie_actuel as 
select v_somme_depense_utilisateur.id, 
COALESCE(v_somme_entreeMonnaie_utilisateur.entre_monnaie, 0) as entree_monnaie_total, 
COALESCE(v_somme_depense_utilisateur.sortie_monnaie, 0) as sortie_monnaie_total,
COALESCE(v_somme_entreeMonnaie_utilisateur.entre_monnaie, 0) - v_somme_depense_utilisateur.sortie_monnaie as monnaie_restante

from v_somme_entreeMonnaie_utilisateur
right join v_somme_depense_utilisateur on v_somme_depense_utilisateur.id = v_somme_entreeMonnaie_utilisateur.id;


--update code set etat=1 where (id in (select idCode from entreeMonnaie));




-- Vue retournant l'idProfilRégime d'un utilisateur
create view v_utilisateur_profilregime as 
select utilisateur.id, utilisateur.nom, utilisateur.idgenre, genre.nom as genre, utilisateur.dtn, profil.taille, profil.poids, profilRegime.id as idProfilRegime
from utilisateur 
join profil on profil.id = utilisateur.id 
join genre on genre.id = utilisateur.idgenre
join profilRegime 
on profil.poids between profilRegime.poidsdebut and profilRegime.poidsfin
and profil.taille between profilRegime.tailledebut and profilRegime.taillefin;


-- Vue retournant les informations des programmes d'un user avec le prix
create view v_programme_utilisateur as
select v_utilisateur_profilregime.*, regime.idTypeObjectif, typeObjectif.nom as objectif, regime.idplat, plat.nom as plat, plat.prix as prixunitaire, idsport, sport.nom as sport, idmoment, moment.nom as moment, moment.heureDebut, moment.heureFin ,dureesport , variationpoids , poidsplat, plat.prix*poidsplat as prixplat
from v_utilisateur_profilregime

join regime 
on v_utilisateur_profilregime.idprofilregime = regime.idprofilregime

join plat 
on plat.id = regime.idplat

join moment
on moment.id = regime.idmoment

join sport 
on sport.id = regime.idsport

join typeObjectif 
on typeObjectif.id = regime.idtypeObjectif;
















