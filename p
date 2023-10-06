<tbody>
        <?php $no=1; ?>
        <?php foreach ($data['minjam'] as $row) :?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $row['nama_peminjam']; ?></td>
            <td><?= $row['jenis_barang']; ?></td>
            <td><?= $row['no_barang']; ?></td>
            <td><?= $row['tgl_pinjam']; ?></td>
            <td><?= $row['tgl_kembali']; ?></td>
            <td>
                <?php
                $tglPinjam = strtotime($row['tgl_pinjam']);
                $tglKembali = strtotime($row['tgl_kembali']);
               
                if ($tglPinjam >= $tglKembali) {
                    echo '<span class="badge bg-success">Sudah Kembali</span>';
                    $showEditButton = false; // Set variabel $showEditButton menjadi false jika sudah kembali.
                } else {
                    echo '<span class="badge bg-danger">Belum Kembali</span>';
                    $showEditButton = true; // Set variabel $showEditButton menjadi true jika belum kembali.
                }
                ?>
            </td>
            <td>
                <?php if ($showEditButton) : ?>
                    <a href="<?= BASE_URL ?>/minjam/edit/<?=$row['id'] ?>" class="btn btn-primary">Edit</a>
                <?php endif; ?>
                <a href="<?= BASE_URL ?>/minjam/hapus/<?=$row['id'] ?>" class="btn btn-danger" onclick="return confirm('Hapus Data?');">Hapus</a>
            </td>
        </tr>
        <?php $no++; endforeach; ?>
    </tbody>