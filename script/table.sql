CREATE DATABASE tp_article;

CREATE TABLE categorie (
      id_categorie                 SMALLSERIAL PRIMARY KEY ,
      libelle                      VARCHAR(15) NOT NULL
);

CREATE TABLE article (
      id_article                SMALLSERIAL PRIMARY KEY ,
      titre                     VARCHAR(100) NOT NULL ,
      resume                    TEXT NOT NULL ,
      contenu                   TEXT NOT NULL ,
      id_categorie              SMALLINT NOT NULL REFERENCES categorie(id_categorie)
);


INSERT INTO categorie (libelle) VALUES ('Sport') , ('Jeunesse') , ('Culture') , ('Politique') , ('Social');