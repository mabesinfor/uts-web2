<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h1>Detail Nilai</h1>
    <div class="row">
        <div class="col-md-6">
            <table class="table table-striped">
                <tr>
                    <th>Siswa</th>
                    <td><?= $nilai['siswa_nama']; ?></td>
                </tr>
                <tr>
                    <th>Guru</th>
                    <td><?= $nilai['guru_nama']; ?></td>
                </tr>
                <tr>
                    <th>Mata Pelajaran</th>
                    <td><?= $nilai['mata_pelajaran']; ?></td>
                </tr>
                <tr>
                    <th>Nilai</th>
                    <td><?= $nilai['nilai']; ?></td>
                </tr>
            </table>
            <a href="<?= base_url('nilai'); ?>" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>