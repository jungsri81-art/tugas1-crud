-- Buat database
CREATE DATABASE IF NOT EXISTS tugas1_crud;
USE tugas1_crud;

-- Tabel members (tetap ada)
CREATE TABLE IF NOT EXISTS members (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    name VARCHAR(100) NOT NULL,
    city VARCHAR(100),
    join_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    last_login DATETIME NULL
);

-- Data dummy untuk members
INSERT INTO members (username, password, name, city, join_date, last_login) VALUES
('jungis04', MD5('jungis041006'), 'Anak Agung Istri Sri Wangi Nariswari', 'Denpasar', NOW(), NULL),
('agus88', MD5('Agus@123'), 'Agus Santosa', 'Jakarta', NOW(), NULL),
('sari99', MD5('Sari@123'), 'Sari Dewi', 'Surabaya', NOW(), NULL);

-- Tabel mahasiswa (tambahan untuk tugas CRUD)
CREATE TABLE IF NOT EXISTS mahasiswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    nim VARCHAR(20) NOT NULL UNIQUE,
    prodi VARCHAR(50) NOT NULL,
    angkatan INT NOT NULL,
    status ENUM('aktif','nonaktif') DEFAULT 'aktif',
    foto VARCHAR(255) DEFAULT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Data dummy untuk mahasiswa
INSERT INTO mahasiswa (nama, nim, prodi, angkatan, status) VALUES
('Made Arya', '22001', 'TI', 2022, 'aktif'),
('Kadek Putri', '22002', 'SI', 2022, 'aktif'),
('Wayan Budi', '22003', 'TI', 2021, 'nonaktif');