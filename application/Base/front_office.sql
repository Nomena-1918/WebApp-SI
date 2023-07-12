
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


CREATE TABLE typeObjectif(
    id serial PRIMARY KEY,
    nom varchar(50)
);

CREATE TABLE objectif(
    id serial PRIMARY KEY,
    idTypeObjectif int,
    idProfil int,
    valeurPoids decimal,
    dateDebut date,
    FOREIGN KEY (idTypeObjectif) REFERENCES typeObjectif(id),
    FOREIGN KEY (idProfil) REFERENCES profil(id)
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
    idProfil int,
    etat int,
    FOREIGN KEY (idCode) REFERENCES code(id),
    FOREIGN KEY (idProfil) REFERENCES profil(id)
);

CREATE TABLE achatRegime(
    id serial PRIMARY KEY,
    idProfil int,
    somme decimal,
    dateDebut date,
    dateFin date,
    FOREIGN KEY (idProfil) REFERENCES profil(id)
);




















