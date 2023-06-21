DROP DATABASE if EXISTS doceria; 

CREATE DATABASE doceria;
USE doceria;

CREATE TABLE produto(
	id_pro INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nome_pro VARCHAR(50) 
);

CREATE TABLE sabor(
	id_s INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(50) 
);

CREATE TABLE descricao (
  id_desc INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  pro INT, 
  preco DECIMAL (8,2),
  sabor INT,

	FOREIGN KEY (pro)REFERENCES produto (id_pro),
	FOREIGN KEY (sabor)REFERENCES sabor (id_s)
);

CREATE TABLE entrega (
  id_en INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  data_entrega DATE,
  hora TIME,
  endereco VARCHAR (50)
  
);

CREATE TABLE retirada (
  id_ret INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  data_retirada DATE,
  hora TIME  
);

CREATE TABLE pagamento (
  id_pag INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  forma VARCHAR (50) /*forma de pagamnto*/
);

CREATE TABLE cadastro (
  id_user INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR (50),
  email VARCHAR (50),
  telefone VARCHAR (20),
  senha VARCHAR (25),
  img VARCHAR(100)
  
);

CREATE TABLE pedido (
  id_ped INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  idDesc INT,
  quantidade INT,
  vlTotal DECIMAL(10,2), 
  
  	FOREIGN KEY (idDesc)REFERENCES descricao (id_desc) 
);


;




