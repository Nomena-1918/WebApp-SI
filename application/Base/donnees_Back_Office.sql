INSERT into profilAdmin(nom) values ('admin');

insert into plat(nom) values 
('Céréales'),
('Vary'),
('Pain de mie'),
('Steak frites'),
('Soupe');


insert into sport(nom) values
('Course à pied'),
('Cardio'),
('Musculation'),
('Football'),
('Natation');


insert into profilRegime values
(default, 150, 160, 40, 55),
(default, 150, 160, 56, 85),

(default, 160, 170, 40, 55),
(default, 160, 170, 56, 85);


insert into moment values
(default, 'Matin', '08:00', '12:00'),
(default, 'Midi', '12:00', '15:00'),
(default, 'Soir', '17:00', '20:00');

insert into regime
(idProfilRegime, idPlat, idSport, idMoment, 
dureeSport, variationPoids, poidsPlat) values
--Sport 1-5
--Plat 1-5
--Profil 1-4

--profil1
--Pour grossir
(1, 1, 1, 1, '05:00', 0.4, 200),
(1, 2, 2, 2, '05:00', 0.5, 100),
(1, 3, 3, 3, '05:00', 0.9, 300),
--Pour maigrir
(1, 4, 4, 1, '05:00', 0.4, 200),
(1, 5, 5, 2, '05:00', -0.8, 100),
(1, 1, 1, 3, '05:00', -0.9, 200),

--profil2
--Pour grossir
(2, 1, 1, 1, '05:00', 0.4, 200),
(2, 2, 2, 2, '05:00', 0.5, 100),
(2, 3, 3, 3, '05:00', 0.9, 300),
--Pour maigrir
(2, 4, 4, 1, '05:00', 0.4, 200),
(2, 5, 5, 2, '05:00', -0.8, 100),
(2, 1, 1, 3, '05:00', -0.9, 200),


--profil3
--Pour grossir
(3, 1, 1, 1, '05:00', 0.4, 200),
(3, 2, 2, 2, '05:00', 0.5, 100),
(3, 3, 3, 3, '05:00', 0.9, 300),
--Pour maigrir
(3, 4, 4, 1, '05:00', 0.4, 200),
(3, 5, 5, 2, '05:00', -0.8, 100),
(3, 1, 1, 3, '05:00', -0.9, 200),


--profil4
--Pour grossir
(4, 1, 1, 1, '05:00', 0.4, 200),
(4, 2, 2, 2, '05:00', 0.5, 100),
(4, 3, 3, 3, '05:00', 0.9, 300),
--Pour maigrir
(4, 4, 4, 1, '05:00', 0.4, 200),
(4, 5, 5, 2, '05:00', -0.8, 100),
(4, 1, 1, 3, '05:00', -0.9, 200);


--- REINIT ---
delete from regime;
alter sequence regime_id_seq restart with 1;

delete from moment;
alter sequence moment_id_seq restart with 1;

delete from profilRegime;
alter sequence profilRegime_id_seq restart with 1;

delete from sport;
alter sequence sport_id_seq restart with 1;

delete from plat;
alter sequence plat_id_seq restart with 1;

delete from profilAdmin;
alter sequence profilAdmin_id_seq restart with 1;

