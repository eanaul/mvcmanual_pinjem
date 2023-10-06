


<div class="container">
    <h3 class="mb-3">Pinjam Disini</h3>

    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="<?= BASE_URL; ?>/buku/tambah" class="btn btn-primary">Tambah Pinjam</a>

        <form class="form-inline" method="post" action="<?= BASE_URL ?>/buku/cari">
            <input class="form-control mr-2 mb-2" type="search" placeholder="Search" aria-label="Search" name="cari">
            <button class="btn btn-outline-success" type="submit" name="submit">Search</button>
            <a href="<?= BASE_URL; ?>/buku/index" class="btn btn-outline-success">Reset</a>
        </form>
    </div>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Peminjam</th>
                <th scope="col">Jenis Barang</th>
                <th scope="col">Nomor Barang</th>
                <th scope="col">Tanggal Pinjam</th>
                <th scope="col">Tanggal Kembali</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data['pinjam'] as $row) : ?>
                <?php date_default_timezone_set("asia/jakarta"); ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $row['nama_peminjam']; ?></td>
                    <td><?= $row['jenis_barang']; ?></td>
                    <td><?= $row['no_barang']; ?></td>
                    <td><?= $row['tgl_pinjam']; ?></td>
                    <td><?= $row['tgl_kembali']; ?></td>
                    <td><?php

                             $tglKembali =$row['tgl_kembali'];
                             $tglPinjam =$row['tgl_pinjam'];
                            //  $tglKembaliLama = strtotime('+2 days', strtotime(date_format($tglPinjam, 'Y-m-d')));
                             $now = date('Y-m-d H:i:s');
                              
                             $showEditButton = true;
                         
                             if ($tglPinjam >= $tglKembali || $now >= $tglKembali ) {
                                 echo '<span class="badge bg-success">Sudah Kembali</span>';
                                 $showEditButton = false;
                             } else {
                                 echo '<span class="badge bg-danger">Belum Kembali</span>';
                                     $showEditButton = true; 
                             }
                            ?>
                        </td>
                        <td>
                            <?php if ($showEditButton) : ?>
                                <a href="<?= BASE_URL ?>/buku/edit/<?=$row['id'] ?>" class="btn btn-primary">Edit</a>
                            <?php endif; ?>
                            <a href="<?= BASE_URL ?>/buku/hapus/<?=$row['id'] ?>" class="btn btn-danger" onclick="return confirm('Hapus Data?');">Hapus</a>
                        </td></td>
                    
                </tr>
                <?php $no++; endforeach; ?>
        </tbody>
    </table>
</div>

