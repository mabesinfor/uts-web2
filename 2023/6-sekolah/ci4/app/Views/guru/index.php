<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h1>Daftar Guru</h1>
    <a href="<?= base_url('guru/create'); ?>" class="btn btn-primary mb-3">Tambah Guru</a>
    <table class="table table-striped table-bordered" id="tableGuru">
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
                    <td><?= $g['id']; ?></td>
                    <td><?= $g['nama']; ?></td>
                    <td><?= $g['mata_pelajaran']; ?></td>
                    <td><?= $g['no_telp']; ?></td>
                    <td>
                        <a href="<?= base_url('guru/read/' . $g['id']); ?>" class="btn btn-sm btn-info">Detail</a>
                        <a href="<?= base_url('guru/edit/' . $g['id']); ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="<?= base_url('guru/delete/' . $g['id']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection(); ?>