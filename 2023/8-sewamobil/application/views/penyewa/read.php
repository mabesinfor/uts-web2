<div class="container">
    <h1>Detail Penyewa</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><?php echo $penyewa['nama']; ?></h5>
            <p class="card-text">Alamat: <?php echo $penyewa['alamat']; ?></p>
            <p class="card-text">Nomor Telepon: <?php echo $penyewa['no_telp']; ?></p>
            <a href="<?php echo base_url('penyewa'); ?>" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>