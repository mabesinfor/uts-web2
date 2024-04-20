<?php
include '../config/database.php';
include '../includes/header.php';

$id = $_GET['id'];
$stmt = $db->prepare("SELECT p.id, s.nama AS siswa, g.nama AS guru, p.mata_pelajaran, p.nilai
                      FROM penilaian p
                      JOIN siswa s ON p.siswa_id = s.id
                      JOIN guru g ON p.guru_id = g.id
                      WHERE p.id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();
$nilai = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<h1>Detail Nilai</h1>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Siswa: <?= $nilai['siswa'] ?></h5>
        <p class="card-text">Guru: <?= $nilai['guru'] ?></p>
        <p class="card-text">Mata Pelajaran: <?= $nilai['mata_pelajaran'] ?></p>
        <p class="card-text">Nilai: <?= $nilai['nilai'] ?></p>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </div>
</div>

<?php include '../includes/footer.php'; ?>