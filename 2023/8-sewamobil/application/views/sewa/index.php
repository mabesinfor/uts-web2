<div class="container">
    <h1>Daftar Sewa</h1>
    <a href="<?php echo base_url('sewa/create'); ?>" class="btn btn-primary mb-3">Tambah Sewa</a>
    <table id="tableSewa" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Mobil</th>
                <th>Penyewa</th>
                <th>Tanggal Sewa</th>
                <th>Tanggal Pengembalian</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sewa as $s): ?>
            <tr>
                <td><?php echo $s['id']; ?></td>
                <td><?php echo $s['mobil']; ?></td>
                <td><?php echo $s['penyewa']; ?></td>
                <td><?php echo $s['tanggal_sewa']; ?></td>
                <td><?php echo $s['tanggal_pengembalian']; ?></td>
                <td>
                    <a href="<?php echo base_url('sewa/read/'.$s['id']); ?>" class="btn btn-sm btn-info">Detail</a>
                    <a href="<?php echo base_url('sewa/update/'.$s['id']); ?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="<?php echo base_url('sewa/delete/'.$s['id']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>