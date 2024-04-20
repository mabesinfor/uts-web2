<?php
include '../config/database.php';
include '../includes/header.php';

$id = $_GET['id'];
$stmt = $db->prepare("SELECT * FROM siswa WHERE id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();
$siswa = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];

    $stmt = $db->prepare("UPDATE siswa SET nama = :nama, kelas = :kelas, alamat = :alamat WHERE id = :id");
    $stmt->bindParam(':nama', $nama);
    $stmt->bindParam(':kelas', $kelas);
    $stmt->bindParam(':alamat', $alamat);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    header('Location: index.php');
    exit;
}
?>

<h1>Edit Siswa</h1>
<form method="post">
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?= $siswa['nama'] ?>" required>
    </div>
    <div class="form-group">
        <label for="kelas">Kelas</label>
        <input type="text" class="form-control" id="kelas" name="kelas" value="<?= $siswa['kelas'] ?>" required>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea class="form-control" id="alamat" name="alamat" rows="3" required><?= $siswa['alamat'] ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="index.php" class="btn btn-secondary">Batal</a>
</form>

<?php include '../includes/footer.php'; ?>