


<div class="container">
    <h3 class="mb-3">Edit data: <?= $data['pinjam']['nama_peminjam']?></h3>
    <form action="<?= BASE_URL; ?>/buku/updatePinjam/" method="post">
    <div class="class-body">
    <input type="hidden" name="id" value="<?= $data['pinjam']['id']; ?>">
        <div class="form-group mb-3">
            <label for="judul">Nama Peminjam</label>
            <input type="text" class="form-control" id="judul" name="nama_peminjam" value="<?= $data['pinjam']['nama_peminjam']?>">
        </div>
        <div class="form-group mb-3">
            <label for="exampleSelect">Jenis Barang</label>
            <select class="form-control" id="exampleSelect" name="jenis_barang" value="<?= $data['pinjam']['jenis_barang']?>" >
                <option value="Laptop">Laptop</option>
                <option value="HP">HP</option>
                <option value="Adaptor LAN">Adaptor LAN</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="penulis">Nomor Barang</label>
            <input type="text" class="form-control" id="penulis" name="no_barang" value="<?= $data['pinjam']['no_barang']?>" >
        </div>
        <div class="form-group mb-3">
            <label for="tgl_selesai">Tanggal Pinjam</label>
            <input type="datetime-local" class="form-control" id="tgl_selesai" name="tgl_pinjam" value="<?= $data['pinjam']['tgl_pinjam']?>">
        </div>
        <div class="form-group mb-3">
            <label for="tgl_kembali">Tanggal kembali</label>
            <input type="datetime-local" class="form-control" id="tgl_kembali" name="tgl_kembali">
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
</div>