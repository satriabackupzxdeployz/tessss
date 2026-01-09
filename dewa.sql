CREATE DATABASE dewa_v9999;
USE dewa_v9999;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(100),
    role VARCHAR(10),
    saldo INT
);

CREATE TABLE transaksi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    nominal INT,
    metode VARCHAR(20),
    tanggal TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO users (username,password,role,saldo) VALUES
('admin','admin123','admin',999999),
('user','user123','user',500000);