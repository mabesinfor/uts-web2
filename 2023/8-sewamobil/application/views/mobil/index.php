<div class="container">
    <h1>Daftar Mobil</h1>
    <a href="<?php echo base_url('mobil/create'); ?>" class="btn btn-primary mb-3">Tambah Mobil</a>
    <table id="tableMobil" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Merek</th>
                <th>Tipe</th>
                <th>Harga Sewa</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mobil as $m): ?>
            <tr>
                <td><?php echo $m['id']; ?></td>
                <td><?php echo $m['merek']; ?></td>
                <td><?php echo $m['tipe']; ?></td>
                <td><?php echo $m['harga_sewa']; ?></td>
                <td>
                    <a href="<?php echo base_url('mobil/read/'.$m['id']); ?>" class="btn btn-sm btn-info">Detail</a>
                    <a href="<?php echo base_url('mobil/update/'.$m['id']); ?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="<?php echo base_url('mobil/delete/'.$m['id']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>