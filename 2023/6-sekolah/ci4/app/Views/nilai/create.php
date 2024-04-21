<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h1>Tambah Nilai</h1>
    <?= form_open('nilai/store'); ?>
    <div class="form-group">
        <label for="siswa_id">Siswa</label>
        <select class="form-control select2" id="siswa_id" name="siswa_id" required>
            <option value="">Pilih Siswa</option>
            <?php foreach ($siswa as $s) : ?>
                <option value="<?= $s['id']; ?>"><?= $s['nama']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="guru_id">Guru</label>
        <select class="form-control select2" id="guru_id" name="guru_id" required>
            <option value="">Pilih Guru</option>
            <?php foreach ($guru as $g) : ?>
                <option value="<?= $g['id']; ?>"><?= $g['nama']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="mata_pelajaran">Mata Pelajaran</label>
        <input type="text" class="form-control" id="mata_pelajaran" name="mata_pelajaran" required>
    </div>
    <div class="form-group">
        <label for="nilai">Nilai</label>
        <input type="number" class="form-control" id="nilai" name="nilai" min="0" max="100" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?= base_url('nilai'); ?>" class="btn btn-secondary">Batal</a>
    <?= form_close(); ?>
</div>
<?= $this->endSection(); ?>