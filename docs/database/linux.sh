mysql -u root -p"" && 
CREATE DATABASE landing; && 
USE landing; && 
  CREATE TABLE datos (
  id INT PRIMARY KEY AUTO_INCREMENT,
  email VARCHAR(45) NOT NULL,
  mensaje TEXT NOT NULL
);