CREATE DATABASE IF NOT EXISTS CangsJoki;

USE CangsJoki;

CREATE TABLE IF NOT EXISTS `tb_handphone` (
    ID_HP int(11) NOT NULL AUTO_INCREMENT,
    Merk_HP varchar(20) NOT NULL,
    Harga int(11) NOT NULL,
    Spesifikasi text NOT NULL,
    Gambar varchar(1000) NOT NULL,
    PRIMARY KEY (ID_HP)
);

CREATE TABLE IF NOT EXISTS `tb_user` (
    ID_User int(11) NOT NULL AUTO_INCREMENT,
    Username varchar(20) NOT NULL,
    Pass varchar(255) NOT NULL,
    PRIMARY KEY (ID_User)
);
