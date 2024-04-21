<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h1>Daftar Nilai</h1>
    <a href="<?= base_url('nilai/create'); ?>" class="btn btn-primary mb-3">Tambah Nilai</a>
    <table class="table table-striped table-bordered" id="tableNilai">
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
                    <td><?= $n['id']; ?></td>
                    <td><?= isset($n['siswa_nama']) ? $n['siswa_nama'] : '-'; ?></td>
                    <td><?= isset($n['guru_nama']) ? $n['guru_nama'] : '-'; ?></td>
                    <td><?= $n['mata_pelajaran']; ?></td>
                    <td><?= $n['nilai']; ?></td>
                    <td>
                        <a href="<?= base_url('nilai/read/' . $n['id']); ?>" class="btn btn-sm btn-info">Detail</a>
                        <a href="<?= base_url('nilai/edit/' . $n['id']); ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="<?= base_url('nilai/delete/' . $n['id']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection(); ?>