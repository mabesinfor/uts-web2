<div class="container">
    <h1>Update Mobil</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('mobil/edit/'.$mobil['id']); ?>
    <div class="form-group">
        <label for="merek">Merek</label>
        <input type="text" class="form-control" id="merek" name="merek" value="<?php echo $mobil['merek']; ?>" required>
    </div>
    <div class="form-group">
        <label for="tipe">Tipe</label>
        <input type="text" class="form-control" id="tipe" name="tipe" value="<?php echo $mobil['tipe']; ?>" required>
    </div>
    <div class="form-group">
        <label for="harga_sewa">Harga Sewa per Hari</label>
        <input type="number" class="form-control" id="harga_sewa" name="harga_sewa" min="0" step="1000" value="<?php echo $mobil['harga_sewa']; ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?php echo base_url('mobil'); ?>" class="btn btn-secondary">Batal</a>
    <?php echo form_close(); ?>
</div>