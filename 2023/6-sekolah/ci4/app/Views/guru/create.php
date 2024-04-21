<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h1>Tambah Guru</h1>
    <?= form_open('guru/store'); ?>
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
    </div>
    <div class="form-group">
        <label for="mata_pelajaran">Mata Pelajaran</label>
        <input type="text" class="form-control" id="mata_pelajaran" name="mata_pelajaran" required>
    </div>
    <div class="form-group">
        <label for="no_telp">Nomor Telepon</label>
        <input type="text" class="form-control" id="no_telp" name="no_telp" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?= base_url('guru'); ?>" class="btn btn-secondary">Batal</a>
    <?= form_close(); ?>
</div>
<?= $this->endSection(); ?>