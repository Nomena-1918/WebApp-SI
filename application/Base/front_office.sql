
            --FRONT-OFFICE--
CREATE TABLE genre(
    id serial PRIMARY KEY,
    nom varchar(50)
);

CREATE TABLE profil(
    id serial PRIMARY KEY,
    nom varchar(50),
    idGenre int,
    taille decimal,
    poids decimal,
    FOREIGN KEY (idGenre) REFERENCES genre(id)
);


CREATE TABLE typeObjectif(
    id serial PRIMARY KEY,
    nom varchar(50)
);

INSERT INTO profil VALUES (default,'augmentation du poids');
INSERT INTO profil VALUES (default,'reduction du poids');


CREATE TABLE objectif(
    id serial PRIMARY KEY,
    idTypeObjectif int,
    idProfil int,
    valeurPoids decimal,
    dateDebut date,
    FOREIGN KEY (idTypeObjectif) REFERENCES typeObjectif(id),
     FOREIGN KEY (idProfil) REFERENCES profil(id)
);

INSERT INTO objectif VALUES (default,1,1,70,'2023-07-01');
INSERT INTO objectif VALUES (default,1,2,70,'2023-07-02');
INSERT INTO objectif VALUES (default,1,3,55,'2023-07-04');
INSERT INTO objectif VALUES (default,2,4,70,'2023-07-05');
INSERT INTO objectif VALUES (default,2,5,50,'2023-07-06');

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

CREATE TABLE sortieMonnaie(
    id serial PRIMARY KEY,
    idCode int,
    idProfil int,
    valeur decimal,
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




















