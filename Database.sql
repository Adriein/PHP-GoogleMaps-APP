CREATE DATABASE googlemaps;

USE googlemaps;

CREATE TABLE locales(
	identificador int NOT NULL AUTO_INCREMENT,
    nombre varchar(50) NOT NULL,
    PRIMARY KEY (identificador)
);

CREATE TABLE coordenadas(
	identificador int NOT NULL AUTO_INCREMENT,
    coordenada varchar(50) NOT NULL,
    locales int NOT NULL,
    PRIMARY KEY (identificador),
    FOREIGN KEY (locales) REFERENCES locales(identificador) ON UPDATE CASCADE ON DELETE CASCADE
);

INSERT INTO locales (nombre) VALUES ('Bar');
INSERT INTO locales (nombre) VALUES ('Discoteca');
INSERT INTO locales (nombre) VALUES ('Restaurante');

INSERT INTO coordenadas (coordenada, locales) VALUES ('lat: 41.393109, lng: 2.150062', 3);
INSERT INTO coordenadas (coordenada, locales) VALUES ('lat: 41.389202, lng: 2.140228', 3);
INSERT INTO coordenadas (coordenada, locales) VALUES ('lat: 41.374438, lng: 2.169569', 2);
INSERT INTO coordenadas (coordenada, locales) VALUES ('lat: 41.397745, lng: 2.191098', 2);
INSERT INTO coordenadas (coordenada, locales) VALUES ('lat: 41.389460, lng: 2.157913', 1);
INSERT INTO coordenadas (coordenada, locales) VALUES ('lat: 41.392371, lng: 2.154437', 1);
