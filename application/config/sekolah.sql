-- Membuat database
CREATE DATABASE IF NOT EXISTS sekolah;
USE sekolah;

-- Membuat tabel siswa
CREATE TABLE IF NOT EXISTS siswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(255) NOT NULL,
    kelas VARCHAR(50) NOT NULL,
    alamat TEXT NOT NULL
);

-- Membuat tabel guru
CREATE TABLE IF NOT EXISTS guru (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(255) NOT NULL,
    mata_pelajaran VARCHAR(100) NOT NULL,
    no_telp VARCHAR(20) NOT NULL
);

-- Membuat tabel nilai
CREATE TABLE IF NOT EXISTS penilaian (
    id INT AUTO_INCREMENT PRIMARY KEY,
    siswa_id INT NOT NULL,
    guru_id INT NOT NULL,
    mata_pelajaran VARCHAR(100) NOT NULL,
    nilai INT NOT NULL,
    FOREIGN KEY (siswa_id) REFERENCES siswa(id),
    FOREIGN KEY (guru_id) REFERENCES guru(id)
);

-- Mengisi data awal untuk tabel siswa
INSERT INTO siswa (nama, kelas, alamat) VALUES
('John Doe', '10A', 'Jalan Sudirman No. 123, Jakarta'),
('Jane Smith', '11B', 'Jalan Thamrin No. 456, Bandung'),
('Michael Johnson', '12C', 'Jalan Gatot Subroto No. 789, Surabaya');

-- Mengisi data awal untuk tabel guru
INSERT INTO guru (nama, mata_pelajaran, no_telp) VALUES
('Robert Brown', 'Matematika', '081234567890'),
('Emily Wilson', 'Bahasa Inggris', '089876543210'),
('David Taylor', 'Biologi', '087654321098');

-- Mengisi data awal untuk tabel nilai
INSERT INTO penilaian (siswa_id, guru_id, mata_pelajaran, nilai) VALUES
(1, 1, 'Matematika', 85),
(1, 2, 'Bahasa Inggris', 92),
(2, 1, 'Matematika', 78),
(2, 3, 'Biologi', 90),
(3, 2, 'Bahasa Inggris', 83),
(3, 3, 'Biologi', 75);