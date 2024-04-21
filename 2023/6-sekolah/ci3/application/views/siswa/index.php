<div class="container">
    <h1>Daftar Siswa</h1>
    <a href="<?php echo base_url('siswa/create'); ?>" class="btn btn-primary mb-3">Tambah Siswa</a>
    <table id="tableSiswa" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($siswa as $s) : ?>
                <tr>
                    <td><?php echo $s['id']; ?></td>
                    <td><?php echo $s['nama']; ?></td>
                    <td><?php echo $s['kelas']; ?></td>
                    <td><?php echo $s['alamat']; ?></td>
                    <td>
                        <a href="<?php echo base_url('siswa/read/' . $s['id']); ?>" class="btn btn-sm btn-info">Detail</a>
                        <a href="<?php echo base_url('siswa/update/' . $s['id']); ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="<?php echo base_url('siswa/delete/' . $s['id']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>