<?php
include '../config/database.php';
include '../includes/header.php';

$stmt = $db->prepare("SELECT * FROM siswa");
$stmt->execute();
$siswa = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h1>Daftar Siswa</h1>
<a href="create.php" class="btn btn-primary mb-3">Tambah Siswa</a>
<table id="tableSiswa" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($siswa as $s) : ?>
            <tr>
                <td><?= $s['id'] ?></td>
                <td><?= $s['nama'] ?></td>
                <td><?= $s['kelas'] ?></td>
                <td><?= $s['alamat'] ?></td>
                <td>
                    <a href="/6-sekolah-pdo/siswa/read/<?= $s['id'] ?>" class="btn btn-sm btn-info">Detail</a>
                    <a href="/6-sekolah-pdo/siswa/update/<?= $s['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="/6-sekolah-pdo/siswa/delete/<?= $s['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include '../includes/footer.php'; ?>