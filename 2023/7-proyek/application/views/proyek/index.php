<div class="container">
    <h1>Daftar Proyek</h1>
    <a href="<?php echo base_url('proyek/create'); ?>" class="btn btn-primary mb-3">Tambah Proyek</a>
    <table id="tableProyek" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Deadline</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($proyek as $p) : ?>
                <tr>
                    <td><?php echo $p['id']; ?></td>
                    <td><?php echo $p['nama']; ?></td>
                    <td><?php echo $p['deskripsi']; ?></td>
                    <td><?php echo date('d M Y', strtotime($p['deadline'])); ?></td>
                    <td>
                        <a href="<?php echo base_url('proyek/read/' . $p['id']); ?>" class="btn btn-sm btn-info">Detail</a>
                        <a href="<?php echo base_url('proyek/update/' . $p['id']); ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="<?php echo base_url('proyek/delete/' . $p['id']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>