CREATE TABLE contatti(
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(40) NOT NULL,
    cognome VARCHAR(40) NOT NULL,
    societa VARCHAR(70) NOT NULL,
    qualifica VARCHAR(40) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefono VARCHAR(10) NOT NULL,
    compleanno DATE NOT NULL,
    note VARCHAR(255) NOT NULL,
    PRIMARY KEY(id)
);