<div class="container">
    <h1>Detail Mobil</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><?php echo $mobil['merek'] . ' ' . $mobil['tipe']; ?></h5>
            <p class="card-text">Harga Sewa per Hari: Rp <?php echo number_format($mobil['harga_sewa'], 0, ',', '.'); ?></p>
            <a href="<?php echo base_url('mobil'); ?>" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>