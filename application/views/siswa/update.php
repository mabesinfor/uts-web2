<div class="container">
    <h1>Update Siswa</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('siswa/edit/'.$siswa['id']); ?>
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $siswa['nama']; ?>" required>
    </div>
    <div class="form-group">
        <label for="kelas">Kelas</label>
        <input type="text" class="form-control" id="kelas" name="kelas" value="<?php echo $siswa['kelas']; ?>" required>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea class="form-control" id="alamat" name="alamat" required><?php echo $siswa['alamat']; ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?php echo base_url('siswa'); ?>" class="btn btn-secondary">Batal</a>
    <?php echo form_close(); ?>
</div>