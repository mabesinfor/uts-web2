<?php
include '../config/database.php';
include '../includes/header.php';

$stmt = $db->prepare("SELECT p.id, s.nama AS siswa, g.nama AS guru, p.mata_pelajaran, p.nilai
                      FROM penilaian p
                      JOIN siswa s ON p.siswa_id = s.id
                      JOIN guru g ON p.guru_id = g.id");
$stmt->execute();
$nilai = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h1>Daftar Nilai</h1>
<a href="create.php" class="btn btn-primary mb-3">Tambah Nilai</a>
<table id="tableNilai" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Siswa</th>
            <th>Guru</th>
            <th>Mata Pelajaran</th>
            <th>Nilai</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($nilai as $n) : ?>
            <tr>
                <td><?= $n['id'] ?></td>
                <td><?= $n['siswa'] ?></td>
                <td><?= $n['guru'] ?></td>
                <td><?= $n['mata_pelajaran'] ?></td>
                <td><?= $n['nilai'] ?></td>
                <td>
                    <a href="/6-sekolah-pdo/nilai/read/<?= $s['id'] ?>" class="btn btn-sm btn-info">Detail</a>
                    <a href="/6-sekolah-pdo/nilai/update/<?= $s['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="/6-sekolah-pdo/nilai/delete/<?= $s['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include '../includes/footer.php'; ?>