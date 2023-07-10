
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

CREATE TABLE objectif(
    id serial PRIMARY KEY,
    idTypeObjectif int,
    valeur decimal,
    dateDebut date,
    FOREIGN KEY (idTypeObjectif) REFERENCES typeObjectif(id)
);

CREATE TABLE code(
    id serial PRIMARY KEY,
    numero varchar(20) Unique,
    montant decimal
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

                --BACK-OFFICE--

CREATE TABLE profilAdmin(
    id serial PRIMARY KEY,
    nom varchar(50)
);

CREATE TABLE plat(
    id serial PRIMARY KEY,
    nom varchar(50),
    prix decimal,
);

CREATE TABLE sport(
    id serial PRIMARY KEY,
    nom varchar(50)
);

CREATE TABLE profilRegime(
    id serial PRIMARY KEY,
    nom varchar(50),
    tailleDebut decimal,
    tailleFin decimal,
    poidsDebut decimal,
    poidsFint decimal
);

CREATE TABLE moment(
    id serial PRIMARY KEY,
    nom varchar(50),
    heureDebut time,
    heureFin time
);

CREATE TABLE regime(
    id serial PRIMARY KEY,
    idProfilRegime int,
    idPlat int , 
    idSport int,
    idMoment int Unique , 
    dureeSport interval,
    variationPoids decimal,
    qte decimal,
    FOREIGN KEY (idProfilRegime) REFERENCES profilRegime(id),
    FOREIGN KEY (idPlat) REFERENCES plat(id),
    FOREIGN KEY (idMoment) REFERENCES moment(id)
);















