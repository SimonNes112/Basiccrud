DROP DATABASE IF EXISTS basiccrud;

CREATE DATABASE basiccrud;

USE basiccrud;



DROP TABLE IF EXISTS student;

CREATE TABLE student (

                         id INT NOT NULL AUTO_INCREMENT,

                         voornaam VARCHAR(50),

                         achternaam VARCHAR(50),

                         PRIMARY KEY (id)

);

CREATE TABLE klas(
id INT NOT NULL AUTO_INCREMENT,

code VARCHAR(15),

vestiging VARCHAR(20),

sectie VARCHAR(20),

cohort INT NOT NULL,

PRIMARY KEY (id)
);

ALTER TABLE student ADD email VARCHAR(50);

ALTER TABLE student ADD telefoonnummer VARCHAR(10);

ALTER TABLE student ADD straatnaam VARCHAR(50) NOT NULL;

ALTER TABLE student ADD huisnummer INT NOT NULL;

ALTER TABlE student ADD huisnummer_toevoeging VARCHAR(10);

ALTER TABLE student ADD woonplaats VARCHAR(50) NOT NULL;

ALTER TABLE student ADD postcode VARCHAR(6) NOT NULL;

ALTER TABLE student ADD klas_id INT NOT NULL;
