<div class="container">
    <h1>Detail Proyek</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><?php echo $proyek['nama']; ?></h5>
            <p class="card-text"><?php echo $proyek['deskripsi']; ?></p>
            <p class="card-text">Deadline: <?php echo date('d M Y', strtotime($proyek['deadline'])); ?></p>
            <a href="<?php echo base_url('proyek'); ?>" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>