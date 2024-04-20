<?php
include '../config/database.php';
include '../includes/header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];

    $stmt = $db->prepare("INSERT INTO siswa (nama, kelas, alamat) VALUES (:nama, :kelas, :alamat)");
    $stmt->bindParam(':nama', $nama);
    $stmt->bindParam(':kelas', $kelas);
    $stmt->bindParam(':alamat', $alamat);
    $stmt->execute();

    header('Location: index.php');
    exit;
}
?>

<h1>Tambah Siswa</h1>
<form method="post">
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
    </div>
    <div class="form-group">
        <label for="kelas">Kelas</label>
        <input type="text" class="form-control" id="kelas" name="kelas" required>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="index.php" class="btn btn-secondary">Batal</a>
</form>

<?php include '../includes/footer.php'; ?>