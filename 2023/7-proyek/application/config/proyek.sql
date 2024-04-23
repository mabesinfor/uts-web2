-- Membuat database
CREATE DATABASE IF NOT EXISTS proyek;
USE proyek;

-- Membuat tabel proyek
CREATE TABLE IF NOT EXISTS proyek (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(255) NOT NULL,
    deskripsi TEXT NOT NULL,
    deadline DATE NOT NULL
);

-- Membuat tabel tim
CREATE TABLE IF NOT EXISTS tim (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(255) NOT NULL,
    anggota TEXT NOT NULL,
    proyek_id INT NOT NULL,
    FOREIGN KEY (proyek_id) REFERENCES proyek(id)
);

-- Membuat tabel tugas
CREATE TABLE IF NOT EXISTS tugas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    deskripsi TEXT NOT NULL,
    tim_id INT NOT NULL,
    proyek_id INT NOT NULL,
    FOREIGN KEY (tim_id) REFERENCES tim(id),
    FOREIGN KEY (proyek_id) REFERENCES proyek(id)
);

-- Mengisi data awal untuk tabel proyek
INSERT INTO proyek (nama, deskripsi, deadline) VALUES
('Aplikasi Mobile', 'Membuat aplikasi mobile untuk pemesanan makanan', '2023-12-31'),
('Website E-commerce', 'Membuat website e-commerce untuk penjualan barang', '2024-03-31'),
('Sistem Informasi Akademik', 'Membuat sistem informasi akademik untuk universitas', '2024-06-30');

-- Mengisi data awal untuk tabel tim
INSERT INTO tim (nama, anggota, proyek_id) VALUES
('Tim Mobile', 'John Doe, Jane Smith', 1),
('Tim Web', 'Michael Johnson, Emily Wilson', 2),
('Tim SIA', 'David Taylor, Robert Brown', 3);

-- Mengisi data awal untuk tabel tugas
INSERT INTO tugas (deskripsi, tim_id, proyek_id) VALUES
('Membuat UI/UX aplikasi', 1, 1),
('Mengembangkan fitur pemesanan', 1, 1),
('Membuat halaman utama website', 2, 2),
('Mengembangkan fitur pembayaran', 2, 2),
('Membuat modul akademik', 3, 3),
('Mengembangkan fitur penjadwalan', 3, 3);