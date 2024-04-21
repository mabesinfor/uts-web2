<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h1>Edit Siswa</h1>
    <?= form_open('siswa/update/' . $siswa['id'], 'method="post"'); ?>
    <?= csrf_field(); ?>
    <input type="hidden" name="_method" value="PUT" />
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?= $siswa['nama']; ?>" required>
    </div>
    <div class="form-group">
        <label for="kelas">Kelas</label>
        <input type="text" class="form-control" id="kelas" name="kelas" value="<?= $siswa['kelas']; ?>" required>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea class="form-control" id="alamat" name="alamat" required><?= $siswa['alamat']; ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?= base_url('siswa'); ?>" class="btn btn-secondary">Batal</a>
    <?= form_close(); ?>
</div>
<?= $this->endSection(); ?>