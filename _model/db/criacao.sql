DROP DATABASE IF EXISTS lancarSortes_db;

CREATE DATABASE IF NOT EXISTS lancarSortes_db
  DEFAULT CHARACTER SET utf8
  DEFAULT COLLATE utf8_general_ci;

USE lancarSortes_db;

CREATE TABLE pessoas (
  idpessoas INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(45) NOT NULL,
  username VARCHAR(15) UNIQUE NOT NULL,
  email VARCHAR(45) UNIQUE,
  telefone VARCHAR(15),
  senha VARCHAR(15) NOT NULL,
  PRIMARY KEY(idpessoas)
)
ENGINE = InnoDB 
DEFAULT CHARSET = utf8;

CREATE TABLE sorteios (
  idsorteios INT NOT NULL AUTO_INCREMENT,
  titulo VARCHAR(45) NOT NULL,
  descricao VARCHAR(255) ,
  valorParticipacao VARCHAR(11),
  estado ENUM('PR', 'PS', 'OP', 'CC') NOT NULL,
  ganhador INT,
  organizador INT NOT NULL,
  momentoSorteio DATETIME NOT NULL,
  momentoCadastro DATETIME NOT NULL,
  lugarSorteio VARCHAR(45) NOT NULL,
  formaRetirada VARCHAR(45) NOT NULL,
  PRIMARY KEY(idsorteio),
  FOREIGN KEY(ganhador) REFERENCES pessoas(idpessoas),
  FOREIGN KEY(organizador) REFERENCES pessoas(idpessoas)
)
ENGINE = InnoDB 
DEFAULT CHARSET = utf8;

CREATE TABLE participacoes (
  idparticipacoes INT NOT NULL AUTO_INCREMENT,
  idsorteios INT NOT NULL,
  idpessoas INT NOT NULL,
  compPagto VARCHAR(255),
  PRIMARY KEY(idparticipacao),
  FOREIGN KEY(idpessoas) REFERENCES pessoas(idpessoas),
  FOREIGN KEY(idsorteio) REFERENCES sorteios(idsorteio)
)
ENGINE = InnoDB 
DEFAULT CHARSET = utf8;

