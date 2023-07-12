                --BACK-OFFICE--

CREATE TABLE profilAdmin(
    id serial PRIMARY KEY,
    nom varchar(50)
);
alter table profilAdmin add column email varchar(100);
alter table profilAdmin add column mdp varchar(50);

CREATE TABLE plat(
    id serial PRIMARY KEY,
    nom varchar(50),
    prixunitaire decimal
);

CREATE TABLE sport(
    id serial PRIMARY KEY,
    nom varchar(50)
);

CREATE TABLE profilRegime(
    id serial PRIMARY KEY,
    tailleDebut decimal,
    tailleFin decimal,
    poidsDebut decimal,
    poidsFin decimal
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
    idMoment int, 
    dureeSport interval,
    variationPoids decimal,
    poidsPlat decimal, --en grammes
    idTypeObjectif int,
    FOREIGN KEY (idProfilRegime) REFERENCES profilRegime(id),
    FOREIGN KEY (idPlat) REFERENCES plat(id),
    FOREIGN KEY (idMoment) REFERENCES moment(id),
    FOREIGN KEY (idTypeObjectif) REFERENCES typeObjectif(id)
);

