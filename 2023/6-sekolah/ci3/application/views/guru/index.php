<div class="container">
    <h1>Daftar Guru</h1>
    <a href="<?php echo base_url('guru/create'); ?>" class="btn btn-primary mb-3">Tambah Guru</a>
    <table id="tableGuru" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Mata Pelajaran</th>
                <th>No. Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($guru as $g): ?>
            <tr>
                <td><?php echo $g['id']; ?></td>
                <td><?php echo $g['nama']; ?></td>
                <td><?php echo $g['mata_pelajaran']; ?></td>
                <td><?php echo $g['no_telp']; ?></td>
                <td>
                    <a href="<?php echo base_url('guru/read/'.$g['id']); ?>" class="btn btn-sm btn-info">Detail</a>
                    <a href="<?php echo base_url('guru/update/'.$g['id']); ?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="<?php echo base_url('guru/delete/'.$g['id']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>