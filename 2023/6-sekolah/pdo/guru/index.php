<?php
include '../config/database.php';
include '../includes/header.php';

$stmt = $db->prepare("SELECT * FROM guru");
$stmt->execute();
$guru = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h1>Daftar Guru</h1>
<a href="create.php" class="btn btn-primary mb-3">Tambah Guru</a>
<table id="tableGuru" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Mata Pelajaran</th>
            <th>No. Telepon</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($guru as $g) : ?>
            <tr>
                <td><?= $g['id'] ?></td>
                <td><?= $g['nama'] ?></td>
                <td><?= $g['mata_pelajaran'] ?></td>
                <td><?= $g['no_telp'] ?></td>
                <td>
                    <a href="/6-sekolah-pdo/guru/read/<?= $s['id'] ?>" class="btn btn-sm btn-info">Detail</a>
                    <a href="/6-sekolah-pdo/guru/update/<?= $s['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="/6-sekolah-pdo/guru/delete/<?= $s['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include '../includes/footer.php'; ?>