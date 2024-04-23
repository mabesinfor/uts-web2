<div class="container">
    <h1>Tambah Tugas</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('tugas/store'); ?>
    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi" required></textarea>
    </div>
    <div class="form-group">
        <label for="tim_id">Tim</label>
        <select class="form-control select2" id="tim_id" name="tim_id" required>
            <option value="">Pilih Tim</option>
            <?php foreach ($tim as $t) : ?>
                <option value="<?php echo $t['id']; ?>"><?php echo $t['nama']; ?></option>
            <?php endforeach; ?>
        </select>
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
    <a href="<?php echo base_url('tugas'); ?>" class="btn btn-secondary">Batal</a>
    <?php echo form_close(); ?>
</div>