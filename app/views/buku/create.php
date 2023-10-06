<div class="container">
    <h3 class="mb-3">Isi data diri</h3>
    <form action="<?= BASE_URL; ?>/buku/simpanPinjam/" method="post">
    <div class="class-body">
        <div class="form-group mb-3">
            <label for="judul">Nama Peminjam</label>
            <input type="text" class="form-control" id="judul" name="nama_peminjam">
        </div>
        <div class="form-group mb-3">
            <label for="exampleSelect">Jenis Barang</label>
            <select class="form-control" id="exampleSelect" name="jenis_barang">
                <option value="Laptop">Laptop</option>
                <option value="HP">HP</option>
                <option value="Adaptor LAN">Adaptor LAN</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="penulis">Nomor Barang</label>
            <input type="text" class="form-control" id="penulis" name="no_barang">
        </div>
        <div class="form-group mb-3">
            <label for="tgl_selesai">Tanggal Pinjam</label>
            <input type="datetime-local" class="form-control" id="tgl_selesai" name="tgl_pinjam">
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
</div>