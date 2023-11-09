# P5_BlogPHP

Dépot du Projet 5 de la formation PHP.

peut être lancé avec un simple 'php -S localhost:port' (port de votre choix)

la base peut être construite avec les instructions 

CREATE TABLE User ( id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY, prenom VARCHAR(80),
 nom VARCHAR(120), imagePath VARCHAR(255), slogan VARCHAR(255), email VARCHAR(320), password VARCHAR(320));
 
CREATE TABLE Post ( id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY, titre VARCHAR(80),
 contenu VARCHAR(255), auteur INTEGER NOT NULL, date DATETIME);

