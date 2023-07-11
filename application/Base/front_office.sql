
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

CREATE TABLE profil(
    id serial primary key,
    idUtilisateur int unique,
    taille decimal,
    poids decimal,
    FOREIGN KEY (idUtilisateur) REFERENCES utilisateur(id)
);


CREATE TABLE typeObjectif(
    id serial PRIMARY KEY,
    nom varchar(50)
);

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

CREATE TABLE achatRegime(
    id serial PRIMARY KEY,
    idUtilisateur int,
    somme decimal,
    dateDebut date,
    dateFin date,
    FOREIGN KEY (idUtilisateur) REFERENCES utilisateur(id)
);


-- Vue retournant l'idProfilRégime d'un utilisateur
create view v_utilisateur_profilregime as 
select utilisateur.id, utilisateur.nom, utilisateur.idgenre, genre.nom as genre, utilisateur.dtn, profil.taille, profil.poids, profilRegime.id as idProfilRegime
from utilisateur 
join profil on profil.id = utilisateur.id 
join genre on genre.id = utilisateur.idgenre
join profilRegime 
on profil.poids between profilRegime.poidsdebut and profilRegime.poidsfin
and profil.taille between profilRegime.tailledebut and profilRegime.taillefin;


-- Vue retournant les informations des programmes d'un user
create view v_programme_utilisateur as
select v_utilisateur_profilregime.*, regime.idTypeObjectif, typeObjectif.nom as objectif, regime.idplat, plat.nom as plat, idsport, sport.nom as sport, idmoment, moment.nom as moment, moment.heureDebut, moment.heureFin ,dureesport , variationpoids , poidsplat
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

-- Vue pour la durée avec le prix du sakafo











