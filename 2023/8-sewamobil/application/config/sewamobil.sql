-- Membuat database
CREATE DATABASE IF NOT EXISTS sewamobil;
USE sewamobil;

-- Membuat tabel mobil
CREATE TABLE IF NOT EXISTS mobil (
    id INT AUTO_INCREMENT PRIMARY KEY,
    merek VARCHAR(50) NOT NULL,
    tipe VARCHAR(50) NOT NULL,
    harga_sewa_per_hari INT NOT NULL
);

-- Membuat tabel penyewa
CREATE TABLE IF NOT EXISTS penyewa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    alamat TEXT NOT NULL,
    no_telp VARCHAR(20) NOT NULL
);

-- Membuat tabel sewa
CREATE TABLE IF NOT EXISTS sewa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    mobil_id INT NOT NULL,
    penyewa_id INT NOT NULL,
    tanggal_sewa DATE NOT NULL,
    tanggal_pengembalian DATE NOT NULL,
    FOREIGN KEY (mobil_id) REFERENCES mobil(id),
    FOREIGN KEY (penyewa_id) REFERENCES penyewa(id)
);

-- Mengisi data awal untuk tabel mobil
INSERT INTO mobil (merek, tipe, harga_sewa_per_hari) VALUES
('Toyota', 'Avanza', 300000),
('Honda', 'Brio', 250000),
('Suzuki', 'Ertiga', 350000);

-- Mengisi data awal untuk tabel penyewa
INSERT INTO penyewa (nama, alamat, no_telp) VALUES
('John Doe', 'Jalan Sudirman No. 123, Jakarta', '081234567890'),
('Jane Smith', 'Jalan Thamrin No. 456, Bandung', '089876543210'),
('Michael Johnson', 'Jalan Gatot Subroto No. 789, Surabaya', '087654321098');

-- Mengisi data awal untuk tabel sewa
INSERT INTO sewa (mobil_id, penyewa_id, tanggal_sewa, tanggal_pengembalian) VALUES
(1, 1, '2023-05-01', '2023-05-05'),
(2, 2, '2023-05-03', '2023-05-06'),
(3, 3, '2023-05-07', '2023-05-10');