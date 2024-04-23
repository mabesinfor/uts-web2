<div class="container">
    <h1>Detail Tugas</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><?php echo $tugas['deskripsi']; ?></h5>
            <p class="card-text">Tim: <?php echo $tugas['tim']; ?></p>
            <p class="card-text">Proyek: <?php echo $tugas['proyek']; ?></p>
            <a href="<?php echo base_url('tugas'); ?>" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>