<div class="container">
    <h1>Tambah Tim</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('tim/store'); ?>
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
    </div>
    <div class="form-group">
        <label for="anggota">Anggota</label>
        <textarea class="form-control" id="anggota" name="anggota" required></textarea>
    </div>
    <div class="form-group">
        <label for="proyek_id">Proyek</label>
        <select class="form-control select2" id="proyek_id" name="proyek_id" required>
            <option value="">Pilih Proyek</option>
            <?php foreach ($proyek as $p) : ?>
                <option value="<?php echo $p['id']; ?>"><?php echo $p['nama']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?php echo base_url('tim'); ?>" class="btn btn-secondary">Batal</a>
    <?php echo form_close(); ?>
</div>