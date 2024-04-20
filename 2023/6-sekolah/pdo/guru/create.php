<?php
include '../config/database.php';
include '../includes/header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $mata_pelajaran = $_POST['mata_pelajaran'];
    $no_telp = $_POST['no_telp'];

    $stmt = $db->prepare("INSERT INTO guru (nama, mata_pelajaran, no_telp) VALUES (:nama, :mata_pelajaran, :no_telp)");
    $stmt->bindParam(':nama', $nama);
    $stmt->bindParam(':mata_pelajaran', $mata_pelajaran);
    $stmt->bindParam(':no_telp', $no_telp);
    $stmt->execute();

    header('Location: index.php');
    exit;
}
?>

<h1>Tambah Guru</h1>
<form method="post">
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
    </div>
    <div class="form-group">
        <label for="mata_pelajaran">Mata Pelajaran</label>
        <input type="text" class="form-control" id="mata_pelajaran" name="mata_pelajaran" required>
    </div>
    <div class="form-group">
        <label for="no_telp">No. Telepon</label>
        <input type="text" class="form-control" id="no_telp" name="no_telp" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="index.php" class="btn btn-secondary">Batal</a>
</form>

<?php include '../includes/footer.php'; ?>