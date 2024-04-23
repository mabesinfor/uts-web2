<div class="container">
    <h1>Daftar Tim</h1>
    <a href="<?php echo base_url('tim/create'); ?>" class="btn btn-primary mb-3">Tambah Tim</a>
    <table id="tableTim" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Anggota</th>
                <th>Proyek</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tim as $t) : ?>
                <tr>
                    <td><?php echo $t['id']; ?></td>
                    <td><?php echo $t['nama']; ?></td>
                    <td><?php echo $t['anggota']; ?></td>
                    <td><?php echo $t['proyek']; ?></td>
                    <td>
                        <a href="<?php echo base_url('tim/read/' . $t['id']); ?>" class="btn btn-sm btn-info">Detail</a>
                        <a href="<?php echo base_url('tim/update/' . $t['id']); ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="<?php echo base_url('tim/delete/' . $t['id']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>