<div class="container">
    <h1>Update Guru</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('guru/edit/'.$guru['id']); ?>
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $guru['nama']; ?>" required>
    </div>
    <div class="form-group">
        <label for="mata_pelajaran">Mata Pelajaran</label>
        <input type="text" class="form-control" id="mata_pelajaran" name="mata_pelajaran" value="<?php echo $guru['mata_pelajaran']; ?>" required>
    </div>
    <div class="form-group">
        <label for="no_telp">Nomor Telepon</label>
        <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?php echo $guru['no_telp']; ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?php echo base_url('guru'); ?>" class="btn btn-secondary">Batal</a>
    <?php echo form_close(); ?>
</div>