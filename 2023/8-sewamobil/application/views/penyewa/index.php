<div class="container">
    <h1>Daftar Penyewa</h1>
    <a href="<?php echo base_url('penyewa/create'); ?>" class="btn btn-primary mb-3">Tambah Penyewa</a>
    <table id="tablePenyewa" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Nomor Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($penyewa as $p): ?>
            <tr>
                <td><?php echo $p['id']; ?></td>
                <td><?php echo $p['nama']; ?></td>
                <td><?php echo $p['alamat']; ?></td>
                <td><?php echo $p['no_telp']; ?></td>
                <td>
                    <a href="<?php echo base_url('penyewa/read/'.$p['id']); ?>" class="btn btn-sm btn-info">Detail</a>
                    <a href="<?php echo base_url('penyewa/update/'.$p['id']); ?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="<?php echo base_url('penyewa/delete/'.$p['id']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>