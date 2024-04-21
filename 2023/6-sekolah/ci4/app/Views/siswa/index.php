<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h1>Daftar Siswa</h1>
    <a href="<?= base_url('siswa/create'); ?>" class="btn btn-primary mb-3">Tambah Siswa</a>
    <table class="table table-striped table-bordered" id="tableSiswa">
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
                    <td><?= $s['id']; ?></td>
                    <td><?= $s['nama']; ?></td>
                    <td><?= $s['kelas']; ?></td>
                    <td><?= $s['alamat']; ?></td>
                    <td>
                        <a href="<?= base_url('siswa/read/' . $s['id']); ?>" class="btn btn-sm btn-info">Detail</a>
                        <a href="<?= base_url('siswa/edit/' . $s['id']); ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="<?= base_url('siswa/delete/' . $s['id']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection(); ?>