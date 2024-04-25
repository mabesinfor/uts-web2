<div class="container">
    <h1>Tambah Sewa</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('sewa/store'); ?>
    <div class="form-group">
        <label for="mobil_id">Mobil</label>
        <select class="form-control select2" id="mobil_id" name="mobil_id" required>
            <option value="">Pilih Mobil</option>
            <?php foreach ($mobil as $m): ?>
            <option value="<?php echo $m['id']; ?>"><?php echo $m['merek'] . ' ' . $m['tipe']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="penyewa_id">Penyewa</label>
        <select class="form-control select2" id="penyewa_id" name="penyewa_id" required>
            <option value="">Pilih Penyewa</option>
            <?php foreach ($penyewa as $p): ?>
            <option value="<?php echo $p['id']; ?>"><?php echo $p['nama']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="tanggal_sewa">Tanggal Sewa</label>
        <input type="date" class="form-control" id="tanggal_sewa" name="tanggal_sewa" required>
    </div>
    <div class="form-group">
        <label for="tanggal_pengembalian">Tanggal Pengembalian</label>
        <input type="date" class="form-control" id="tanggal_pengembalian" name="tanggal_pengembalian" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?php echo base_url('sewa'); ?>" class="btn btn-secondary">Batal</a>
    <?php echo form_close(); ?>
</div>