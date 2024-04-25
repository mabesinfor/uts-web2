<div class="container">
    <h1>Tambah Penyewa</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('penyewa/store'); ?>
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea class="form-control" id="alamat" name="alamat" required></textarea>
    </div>
    <div class="form-group">
        <label for="no_telp">Nomor Telepon</label>
        <input type="text" class="form-control" id="no_telp" name="no_telp" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?php echo base_url('penyewa'); ?>" class="btn btn-secondary">Batal</a>
    <?php echo form_close(); ?>
</div>