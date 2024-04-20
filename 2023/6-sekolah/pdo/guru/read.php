<?php
include '../config/database.php';
include '../includes/header.php';

$id = $_GET['id'];
$stmt = $db->prepare("SELECT * FROM guru WHERE id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();
$guru = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<h1>Detail Guru</h1>
<div class="card">
    <div class="card-body">
        <h5 class="card-title"><?= $guru['nama'] ?></h5>
        <p class="card-text">Mata Pelajaran: <?= $guru['mata_pelajaran'] ?></p>
        <p class="card-text">No. Telepon: <?= $guru['no_telp'] ?></p>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </div>
</div>

<?php include '../includes/footer.php'; ?>