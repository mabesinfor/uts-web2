<div class="container">
    <h1>Update Penyewa</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('penyewa/edit/'.$penyewa['id']); ?>
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $penyewa['nama']; ?>" required>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea class="form-control" id="alamat" name="alamat" required><?php echo $penyewa['alamat']; ?></textarea>
    </div>
    <div class="form-group">
        <label for="no_telp">Nomor Telepon</label>
        <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?php echo $penyewa['no_telp']; ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?php echo base_url('penyewa'); ?>" class="btn btn-secondary">Batal</a>
    <?php echo form_close(); ?>
</div>