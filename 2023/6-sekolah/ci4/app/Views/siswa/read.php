<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h1>Detail Siswa</h1>
    <div class="row">
        <div class="col-md-6">
            <table class="table table-striped">
                <tr>
                    <th>Nama</th>
                    <td><?= $siswa['nama']; ?></td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <td><?= $siswa['kelas']; ?></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><?= $siswa['alamat']; ?></td>
                </tr>
            </table>
            <a href="<?= base_url('siswa'); ?>" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>