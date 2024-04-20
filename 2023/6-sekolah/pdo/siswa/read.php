<?php
include '../config/database.php';
include '../includes/header.php';

$id = $_GET['id'];
$stmt = $db->prepare("SELECT * FROM siswa WHERE id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();
$siswa = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<h1>Detail Siswa</h1>
<div class="card">
    <div class="card-body">
        <h5 class="card-title"><?= $siswa['nama'] ?></h5>
        <p class="card-text">Kelas: <?= $siswa['kelas'] ?></p>
        <p class="card-text">Alamat: <?= $siswa['alamat'] ?></p>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </div>
</div>

<?php include '../includes/footer.php'; ?>