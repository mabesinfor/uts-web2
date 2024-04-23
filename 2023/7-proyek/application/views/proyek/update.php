<div class="container">
    <h1>Update Proyek</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('proyek/edit/'.$proyek['id']); ?>
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $proyek['nama']; ?>" required>
    </div>
    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi" required><?php echo $proyek['deskripsi']; ?></textarea>
    </div>
    <div class="form-group">
        <label for="deadline">Deadline</label>
        <input type="date" class="form-control" id="deadline" name="deadline" value="<?php echo date('Y-m-d', strtotime($proyek['deadline'])); ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?php echo base_url('proyek'); ?>" class="btn btn-secondary">Batal</a>
    <?php echo form_close(); ?>
</div>