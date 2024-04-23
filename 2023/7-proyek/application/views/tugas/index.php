<div class="container">
    <h1>Daftar Tugas</h1>
    <a href="<?php echo base_url('tugas/create'); ?>" class="btn btn-primary mb-3">Tambah Tugas</a>
    <table id="tableTugas" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Deskripsi</th>
                <th>Tim</th>
                <th>Proyek</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tugas as $t) : ?>
                <tr>
                    <td><?php echo $t['id']; ?></td>
                    <td><?php echo $t['deskripsi']; ?></td>
                    <td><?php echo $t['tim']; ?></td>
                    <td><?php echo $t['proyek']; ?></td>
                    <td>
                        <a href="<?php echo base_url('tugas/read/' . $t['id']); ?>" class="btn btn-sm btn-info">Detail</a>
                        <a href="<?php echo base_url('tugas/update/' . $t['id']); ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="<?php echo base_url('tugas/delete/' . $t['id']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>