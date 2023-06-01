CREATE DATABASE campus;

USE campus;

CREATE TABLE
    campers(
        id INT primary key AUTO_INCREMENT,
        nombres VARCHAR (50) NOT NULL,
        direccion VARCHAR (50) NOT NULL,
        logros VARCHAR (60),
        especialidad VARCHAR (60) NOT NULL,
        skills FLOAT NOT NULL,
        ingles VARCHAR (60) NOT NULL,
        ser FLOAT NOT NULL,
        review VARCHAR (60) NOT NULL
    );

CREATE TABLE
    users(
        id INT PRIMARY KEY AUTO_INCREMENT,
        idCamper INT NOT NULL,
        email VARCHAR(80) NOT NULL UNIQUE,
        username VARCHAR(64) NOT NULL,
        password VARCHAR(72) not NULL,
        Foreign Key (idCamper) REFERENCES campers(id)
    );
