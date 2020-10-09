CREATE DATABASE basic_crud CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE basdic_crud;
CREATE TABLE tb_user(
    id int(11) not null AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(100),
    lname VARCHAR(100),
    email VARCHAR(50),
    web VARCHAR(50)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
