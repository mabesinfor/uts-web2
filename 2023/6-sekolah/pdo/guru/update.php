<?php
include '../config/database.php';
include '../includes/header.php';

$id = $_GET['id'];
$stmt = $db->prepare("SELECT * FROM guru WHERE id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();
$guru = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $mata_pelajaran = $_POST['mata_pelajaran'];
    $no_telp = $_POST['no_telp'];

    $stmt = $db->prepare("UPDATE guru SET nama = :nama, mata_pelajaran = :mata_pelajaran, no_telp = :no_telp WHERE id = :id");
    $stmt->bindParam(':nama', $nama);
    $stmt->bindParam(':mata_pelajaran', $mata_pelajaran);
    $stmt->bindParam(':no_telp', $no_telp);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    header('Location: index.php');
    exit;
}
?>

<h1>Edit Guru</h1>
<form method="post">
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?= $guru['nama'] ?>" required>
    </div>
    <div class="form-group">
        <label for="mata_pelajaran">Mata Pelajaran</label>
        <input type="text" class="form-control" id="mata_pelajaran" name="mata_pelajaran" value="<?= $guru['mata_pelajaran'] ?>" required>
    </div>
    <div class="form-group">
        <label for="no_telp">No. Telepon</label>
        <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?= $guru['no_telp'] ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="index.php" class="btn btn-secondary">Batal</a>
</form>

<?php include '../includes/footer.php'; ?>