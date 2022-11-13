CREATE TABLE countries (
   id int NOT NULL AUTO_INCREMENT,
   code varchar(2) NOT NULL,
   name varchar(100) NOT NULL,
   PRIMARY KEY (id),
   UNIQUE (code)
);
