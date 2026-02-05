CREATE DATABASE bansos;
USE bansos;

CREATE TABLE pengajuan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    nik_encrypted TEXT,
    pendapatan INT,
    provinsi VARCHAR(100),
    kota VARCHAR(100),
    kecamatan VARCHAR(100),
    kelurahan VARCHAR(100),
    rt VARCHAR(5),
    rw VARCHAR(5),
    ktp_encrypted VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
