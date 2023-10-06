<?php

class Buku extends Controller {

    public function index()
    {
        $data['judul'] = 'Data Peminjaman';
        $data['pinjam'] = $this->model('BukuModel')->getAllPinjam();
        $this->view('template/header', $data);
        $this->view('buku/index', $data);
        $this->view('template/footer');
    }

    public function cari()
    {
        $data['judul'] = 'Data Peminjaman';
        $data['pinjam'] = $this->model('BukuModel')->cariPinjam();
        $this->view('template/header', $data);
        $this->view('buku/index', $data);
        $this->view('template/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Pinjam';
        $this->view('template/header', $data);
        $this->view('buku/create');
        $this->view('template/footer');
    }

    public function simpanPinjam(){
        if( $this->model("BukuModel")->tambahPinjam($_POST) > 0 ) {
            header('location: '. BASE_URL . '/buku/index');
            exit;
        }else{
            header('location: '. BASE_URL . '/buku/index');
            exit;
        }
    }

    public function edit($id){

        $data['judul'] = 'Edit Data';
        $data['pinjam'] = $this->model('BukuModel')->getPinjamById($id);
        $this->view('template/header', $data);
        $this->view('buku/edit', $data);
        $this->view('template/footer');
    }

    public function updatePinjam(){
        
        if( $this->model('BukuModel')->updateDataPinjam($_POST) > 0) {
            header('location: '. BASE_URL . '/buku/index');
            exit;
        }else{
            header('location: '. BASE_URL . '/buku/index');
            exit;
        }
    }

    public function hapus($id){
            if ( $this->model('BukuModel')->deletePinjam($id) > 0) {
                header('location: '. BASE_URL . '/buku/index');
                exit;
            }else{
                header('location: '. BASE_URL . '/buku/index');
                exit;
            }
    }
   
}
?>