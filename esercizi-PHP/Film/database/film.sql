CREATE TABLE film(
    titolo VARCHAR(40) NOT NULL,
    nome_regista VARCHAR(40) NOT NULL,
    descrizione VARCHAR(255) NOT NULL,
    durata_film TIME NOT NULL,
    anno_pubblicazione DATE NOT NULL,
    genere VARCHAR(70) NOT NULL,
    id INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(id)
);