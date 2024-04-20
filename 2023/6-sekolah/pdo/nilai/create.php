<?php
include '../config/database.php';
include '../includes/header.php';

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
    $nilai = $_POST['nilai'];

    $stmt = $db->prepare("INSERT INTO penilaian (siswa_id, guru_id, mata_pelajaran, nilai) VALUES (:siswa_id, :guru_id, :mata_pelajaran, :nilai)");
    $stmt->bindParam(':siswa_id', $siswa_id);
    $stmt->bindParam(':guru_id', $guru_id);
    $stmt->bindParam(':mata_pelajaran', $mata_pelajaran);
    $stmt->bindParam(':nilai', $nilai);
    $stmt->execute();

    header('Location: index.php');
    exit;
}
?>

<h1>Tambah Nilai</h1>
<form method="post">
    <div class="form-group">
        <label for="siswa_id">Siswa</label>
        <select class="form-control select2" id="siswa_id" name="siswa_id" required>
            <option value="">Pilih Siswa</option>
            <?php foreach ($siswa as $s) : ?>
                <option value="<?= $s['id'] ?>"><?= $s['nama'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="guru_id">Guru</label>
        <select class="form-control select2" id="guru_id" name="guru_id" required>
            <option value="">Pilih Guru</option>
            <?php foreach ($guru as $g) : ?>
                <option value="<?= $g['id'] ?>"><?= $g['nama'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="mata_pelajaran">Mata Pelajaran</label>
        <input type="text" class="form-control" id="mata_pelajaran" name="mata_pelajaran" required>
    </div>
    <div class="form-group">
        <label for="nilai">Nilai</label>
        <input type="number" class="form-control" id="nilai" name="nilai" min="0" max="100" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="index.php" class="btn btn-secondary">Batal</a>
</form>

<?php include '../includes/footer.php'; ?>