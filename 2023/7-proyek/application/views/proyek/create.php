<div class="container">
    <h1>Tambah Proyek</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('proyek/store'); ?>
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
    </div>
    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi" required></textarea>
    </div>
    <div class="form-group">
        <label for="deadline">Deadline</label>
        <input type="date" class="form-control" id="deadline" name="deadline" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?php echo base_url('proyek'); ?>" class="btn btn-secondary">Batal</a>
    <?php echo form_close(); ?>
</div>