<div class="container">
    <h1>Detail Siswa</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><?php echo $siswa['nama']; ?></h5>
            <p class="card-text">Kelas: <?php echo $siswa['kelas']; ?></p>
            <p class="card-text">Alamat: <?php echo $siswa['alamat']; ?></p>
            <a href="<?php echo base_url('siswa'); ?>" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>