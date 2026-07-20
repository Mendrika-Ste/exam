CREATE DATABASE products;

USE products;


CREATE TABLE membre (
    id_membre INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50),
    numero_etu INT,
    image_profil VARCHAR(100)
);

CREATE TABLE categorie ( 
    id_categorie INT AUTO_INCREMENT PRIMARY KEY,
    nom_categorie VARCHAR(100)
);

CREATE TABLE produit (
    id_produit INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100), 
    id_categorie INT, 
    prix_reference INT,
    FOREIGN KEY (id_categorie) REFERENCES categorie(id_categorie)
);


CREATE TABLE produit_membre (
    id_produit_membre INT AUTO_INCREMENT PRIMARY KEY, 
    id_produit INT, 
    id_membre INT, 
    prix_vente INT, 
    quantite_dispo INT, 
    date_dispo date,
    FOREIGN KEY (id_produit) REFERENCES produit(id_produit),
    FOREIGN KEY (id_membre) REFERENCES membre(id_membre)
);

CREATE TABLE vente (
    id_vente INT AUTO_INCREMENT PRIMARY KEY, 
    date_vente date , 
    heure time, 
    id_produit_membre INT, 
    quantite INT,
    FOREIGN KEY (id_produit_membre) REFERENCES produit_membre(id_produit_membre)
);

INSERT INTO membre (nom , numero_etu, image_profil) VALUES 
('Annah',4690,'version1/image/girl1.jpeg'),
('Lilith',4730,'version1/image/girl2.jpeg'),
('Mia',4659,'version1/image/girl3.jpeg'),
('Nadine',4673,'version1/image/girl4.jpeg'),
('Sarah',4839,'version1/image/girl5.jpeg'),
('Koto',4701,'version1/image/boy1.jpeg'),
('Kayle',4862,'version1/image/boy2.jpeg'),
('Stormer',4749,'version1/image/boy3.jpeg'),
('Daven',4644,'version1/image/boy4.jpeg'),
('Frizer',4798,'version1/image/boy5.jpeg');

INSERT INTO categorie ( nom_categorie) VALUES
('plat'),
('boisson'),
('snack'),
('dessert');

INSERT INTO produit (nom , id_categorie, prix_reference) VALUES
('Tsaramaso sy saucisse',1,5000),('Trondro',1,8000),('Anana sy henabaolina',1,5000),('Ravitoto sy Henakisoa',1,7000),
('Hena omby',1,7000),('Hena omby special',1,8000),('Anana sy saucisse',1,5000),('Tchock sy atody',1,7000),
('Heineken',2,3000),('Schweppes',2,2500),('Andros sport',2,5000),('Energy mix',2,2500),
('Coca cola',2,2500),('Ciao',2,3000),('Buddy',2,2000),('Soofty',2,2000),
('Salto super voanjo',3,1000),('Salto fritte',3,1500),('Salto chips',3,700),('Lays',3,3000),
('Pringles',3,4500),('Doritos',3,3500),('Frittes',3,3000),('Pop-corn',3,2500),
('Macaron',4,2000),('Glace au chocolat',4,3000),('Glace aux fruits',4,3000),('Creme Oreo',4,3000),('Gateaux',4,3000);


INSERT INTO produit_membre (id_produit, id_membre, prix_vente, quantite_dispo, date_dispo) VALUES
(1,1,8000,10,'2026-07-30'),
(5,2,8000,10,'2026-07-30'),
(3,7,8000,10,'2026-07-30'),
(7,10,8000,10,'2026-07-30'),
(9,8,8000,10,'2026-07-30'),
(11,3,8000,10,'2026-07-30'),
(12,4,8000,10,'2026-07-30'),
(15,5,8000,10,'2026-07-30'),
(18,6,8000,10,'2026-07-30'),
(20,8,8000,10,'2026-07-30'),
(21,7,8000,10,'2026-07-30'),
(23,9,8000,10,'2026-07-30'),
(25,2,8000,10,'2026-07-30'),
(27,3,8000,10,'2026-07-30'),
(26,10,8000,10,'2026-07-30'),
(28,1,8000,10,'2026-07-30'),
(29,4,8000,10,'2026-07-30'),
(2,5,8000,10,'2026-07-30'),
(14,9,8000,10,'2026-07-30'),
(22,1,8000,10,'2026-07-30');




INSERT INTO vente (date_vente , heure , id_produit_membre, quantite) VALUES
('2026-07-20','09:12:00',1,1),
('2026-07-20','09:13:00',2,1),
('2026-07-20','09:14:00',3,1),
('2026-07-20','09:15:00',4,1),
('2026-07-20','09:16:00',5,2),
('2026-07-20','09:17:00',6,1),
('2026-07-20','09:17:30',7,1),
('2026-07-20','09:20:00',8,1),
('2026-07-20','09:23:00',9,1),
('2026-07-20','09:26:00',10,3),
('2026-07-20','09:27:00',11,2),
('2026-07-20','09:30:00',12,1),
('2026-07-20','09:45:00',13,1),
('2026-07-20','09:47:00',14,1),
('2026-07-20','09:48:00',15,1),
('2026-07-20','09:50:00',16,1),
('2026-07-20','10:01:00',17,1),
('2026-07-20','10:09:00',18,1),
('2026-07-20','10:12:00',19,1),
('2026-07-20','10:15:00',20,1);


