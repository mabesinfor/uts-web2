<div class="container">
    <h1>Daftar Nilai</h1>
    <a href="<?php echo base_url('nilai/create'); ?>" class="btn btn-primary mb-3">Tambah Nilai</a>
    <table id="tableNilai" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Siswa</th>
                <th>Guru</th>
                <th>Mata Pelajaran</th>
                <th>Nilai</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($nilai as $n): ?>
            <tr>
                <td><?php echo $n['id']; ?></td>
                <td><?php echo $n['siswa']; ?></td>
                <td><?php echo $n['guru']; ?></td>
                <td><?php echo $n['mata_pelajaran']; ?></td>
                <td><?php echo $n['nilai']; ?></td>
                <td>
                    <a href="<?php echo base_url('nilai/read/'.$n['id']); ?>" class="btn btn-sm btn-info">Detail</a>
                    <a href="<?php echo base_url('nilai/update/'.$n['id']); ?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="<?php echo base_url('nilai/delete/'.$n['id']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>