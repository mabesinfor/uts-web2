<div class="container">
    <h1>Update Nilai</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('nilai/edit/'.$nilai['id']); ?>
    <div class="form-group">
        <label for="siswa_id">Siswa</label>
        <select class="form-control select2" id="siswa_id" name="siswa_id" required>
            <option value="">Pilih Siswa</option>
            <?php foreach ($siswa as $s): ?>
            <option value="<?php echo $s['id']; ?>" <?php if($s['id'] == $nilai['siswa_id']) echo 'selected'; ?>><?php echo $s['nama']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="guru_id">Guru</label>
        <select class="form-control select2" id="guru_id" name="guru_id" required>
            <option value="">Pilih Guru</option>
            <?php foreach ($guru as $g): ?>
            <option value="<?php echo $g['id']; ?>" <?php if($g['id'] == $nilai['guru_id']) echo 'selected'; ?>><?php echo $g['nama']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="mata_pelajaran">Mata Pelajaran</label>
        <input type="text" class="form-control" id="mata_pelajaran" name="mata_pelajaran" value="<?php echo $nilai['mata_pelajaran']; ?>" required>
    </div>
    <div class="form-group">
        <label for="nilai">Nilai</label>
        <input type="number" class="form-control" id="nilai" name="nilai" min="0" max="100" value="<?php echo $nilai['nilai']; ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?php echo base_url('nilai'); ?>" class="btn btn-secondary">Batal</a>
    <?php echo form_close(); ?>
</div>