<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h1>Detail Guru</h1>
    <div class="row">
        <div class="col-md-6">
            <table class="table table-striped">
                <tr>
                    <th>Nama</th>
                    <td><?= $guru['nama']; ?></td>
                </tr>
                <tr>
                    <th>Mata Pelajaran</th>
                    <td><?= $guru['mata_pelajaran']; ?></td>
                </tr>
                <tr>
                    <th>Nomor Telepon</th>
                    <td><?= $guru['no_telp']; ?></td>
                </tr>
            </table>
            <a href="<?= base_url('guru'); ?>" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>