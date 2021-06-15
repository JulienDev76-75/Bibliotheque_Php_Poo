DROP DATABASE IF EXISTS biblio_sql;
CREATE DATABASE biblio_sql CHARACTER SET 'utf8';

DROP USER IF EXISTS 'BiblioPhp'@'Localhost';
CREATE USER 'BiblioPhp'@'Localhost';
GRANT ALL PRIVILEGES ON banque_php.* To 'BiblioPhp'@'Localhost' IDENTIFIED BY 'Johnkeynes76!';

CREATE TABLE customer (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    firstname VARCHAR(250) NOT NULL,
    lastname VARCHAR(250) NOT NULL,
    loan_date DATE NULL,
    adress VARCHAR(250) NOT NULL,
    city VARCHAR(250) NOT NULL,
    postal_code INT(50) NOT NULL,
    age, int(3) NOT NULL,
    mail VARCHAR(50) NOT NULL,
    phone INT(14) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE book (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    title VARCHAR(250) NOT NULL,
    author VARCHAR(250) NOT NULL,
    editing INT(50) NULL,
    statut TINYINT(1) NOT NULL,
    category VARCHAR(250) NOT NULL,
    pitch TEXT(1000) NOT NULL,
    customer_id INT UNSIGNED NULL, 
    PRIMARY KEY (id),
    FOREIGN KEY (customer_id) REFERENCES customer(id)
);


INSERT INTO customer (firstname, lastName, loan_date, city, postal_code, mail, phone) 
VALUES 
('Julien', 'Coart', 2021-06-15, '47 rue de lessard','Rouen','76100', 'julien.coart@gmail.com', 0612548654),
('Bob', 'Lemoche', NULL, '30 rue du canada', 'SouthPark','69000', 'southpark@gmail.com', 0612548654),
('Jean', 'Castex', 2021-07-30,'10 rue de Paris', 'Paris','75000', 'jeanjean@gmail.com', 0612548654),
('Bob', 'Morane', NULL,'20 rue Nicolas Sirkis','Tombouctou','80630', 'aventurier@gmail.com', 0612548654),
('Jean', 'Alesis', 2021-04-28,'50 rue du virage manqué','NoWhere','50000', 'jean.alesis@gmail.com', 064505405);

INSERT INTO book (title, author, editing, statut, category, pitch, customer_id) 
VALUES  
('PHP pour les nuls', 'Thomas Gossart', 2021, 1, "jeunesse", "PHP pour les nuls est idéal pour les nuls, il permet de pouvoir apprendre les bases de PHP, de la POO et du MVC sans embêter son formateur toutes les deux minutes", 1),
('Je veux être président', 'Emmanuel Macron', 2019, 1, "métier", "si toi aussi tu veux devenir président, ce livre est fait pour toi, je t'apprendrais pas à pas à être un vrai président, à gérer les crises et à être aimé de tous", 3),
('Le seigneur des anneaux', 'TOLKIEN', 2018, 0, "aventure", "Un elfe, un paladin, un nain, un hobbit, et un anneau, cette farandole de personnages doivent combattre le terrible Sauron, pour cela, ils doivent balancer un anneau dans un volcan", NULL),
('Conduire une FERRARI pour les nuls de chez nuls', 'Michael Shumacher', 2021, 1, "métier", "ce livre est destiné uniquement à Jean Alesis, qui malgré une F1 supérieure aux autres, ce dernier n'a pas été foutu de gagner un grand prix", 5),
('La Horde du contrevent', 'Alain Damasio', 2010, 1, "fantasy", "Ils sont vingt-trois, forment la trente-quatrième Horde du Contrevent et ont entre vingt-sept et quarante-trois ans. Dans un monde balayé par les vents, ils ont été formés depuis l'enfance dans un seul but : parcourir le monde, d'ouest en est, de l'Aval vers l'Amont, à contre-courant face au vent, à travers la plaine, l'eau et les pics glacés, pour atteindre le mythique Extrême-Amont, la source de tous les vents. ", 1),
('Histoire de la France', 'Charles de Gaulle', 1946, 0, "histoire", "l'Histoire de la FRANCE vu par Charles de Gaulle, militaire, politique, mais aussi historien à ses heures perdues, l'histoire recouvre de 1910 jusqu'à 1945", NULL);
s
