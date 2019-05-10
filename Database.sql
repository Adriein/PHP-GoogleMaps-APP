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
