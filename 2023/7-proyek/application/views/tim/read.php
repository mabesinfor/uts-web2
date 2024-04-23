<div class="container">
    <h1>Detail Tim</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><?php echo $tim['nama']; ?></h5>
            <p class="card-text">Anggota: <?php echo $tim['anggota']; ?></p>
            <p class="card-text">Proyek: <?php echo $tim['proyek']; ?></p>
            <a href="<?php echo base_url('tim'); ?>" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>