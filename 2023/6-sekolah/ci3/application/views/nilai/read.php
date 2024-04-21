<div class="container">
    <h1>Detail Nilai</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Siswa: <?php echo $nilai['siswa']; ?></h5>
            <p class="card-text">Guru: <?php echo $nilai['guru']; ?></p>
            <p class="card-text">Mata Pelajaran: <?php echo $nilai['mata_pelajaran']; ?></p>
            <p class="card-text">Nilai: <?php echo $nilai['nilai']; ?></p>
            <a href="<?php echo base_url('nilai'); ?>" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>