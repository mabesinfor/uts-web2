<div class="container">
    <h1>Detail Sewa</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Mobil: <?php echo $sewa['mobil']; ?></h5>
            <p class="card-text">Penyewa: <?php echo $sewa['penyewa']; ?></p>
            <p class="card-text">Tanggal Sewa: <?php echo $sewa['tanggal_sewa']; ?></p>
            <p class="card-text">Tanggal Pengembalian: <?php echo $sewa['tanggal_pengembalian']; ?></p>
            <a href="<?php echo base_url('sewa'); ?>" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>