<?php
include '../config/database.php';
include '../includes/header.php';

$id = $_GET['id'];
$stmt = $db->prepare("SELECT p.*, s.nama AS siswa, g.nama AS guru
                      FROM penilaian p
                      JOIN siswa s ON p.siswa_id = s.id
                      JOIN guru g ON p.guru_id = g.id
                      WHERE p.id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();
$nilai = $stmt->fetch(PDO::FETCH_ASSOC);

$stmt = $db->prepare("SELECT * FROM siswa");
$stmt->execute();
$siswa = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = $db->prepare("SELECT * FROM guru");
$stmt->execute();
$guru = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $siswa_id = $_POST['siswa_id'];
    $guru_id = $_POST['guru_id'];
    $mata_pelajaran = $_POST['mata_pelajaran'];
    $nilai_nilai = $_POST['nilai'];

    $stmt = $db->prepare("UPDATE penilaian SET siswa_id = :siswa_id, guru_id = :guru_id, mata_pelajaran = :mata_pelajaran, nilai = :nilai WHERE id = :id");
    $stmt->bindParam(':siswa_id', $siswa_id);
    $stmt->bindParam(':guru_id', $guru_id);
    $stmt->bindParam(':mata_pelajaran', $mata_pelajaran);
    $stmt->bindParam(':nilai', $nilai_nilai);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    header('Location: index.php');
    exit;
}
?>

<h1>Edit Nilai</h1>
<form method="post">
    <div class="form-group">
        <label for="siswa_id">Siswa</label>
        <select class="form-control select2" id="siswa_id" name="siswa_id" required>
            <option value="<?= $nilai['siswa_id'] ?>" selected><?= $nilai['siswa'] ?></option>
            <?php foreach ($siswa as $s) : ?>
                <option value="<?= $s['id'] ?>"><?= $s['nama'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="guru_id">Guru</label>
        <select class="form-control select2" id="guru_id" name="guru_id" required>
            <option value="<?= $nilai['guru_id'] ?>" selected><?= $nilai['guru'] ?></option>
            <?php foreach ($guru as $g) : ?>
                <option value="<?= $g['id'] ?>"><?= $g['nama'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="mata_pelajaran">Mata Pelajaran</label>
        <input type="text" class="form-control" id="mata_pelajaran" name="mata_pelajaran" value="<?= $nilai['mata_pelajaran'] ?>" required>
    </div>
    <div class="form-group">
        <label for="nilai">Nilai</label>
        <input type="number" class="form-control" id="nilai" name="nilai" min="0" max="100" value="<?= $nilai['nilai'] ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="index.php" class="btn btn-secondary">Batal</a>
</form>

<?php include '../includes/footer.php'; ?>