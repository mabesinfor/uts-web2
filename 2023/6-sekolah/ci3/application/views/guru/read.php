<div class="container">
    <h1>Detail Guru</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><?php echo $guru['nama']; ?></h5>
            <p class="card-text">Mata Pelajaran: <?php echo $guru['mata_pelajaran']; ?></p>
            <p class="card-text">Nomor Telepon: <?php echo $guru['no_telp']; ?></p>
            <a href="<?php echo base_url('guru'); ?>" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>