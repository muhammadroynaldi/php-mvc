<?php

class Barang extends Controller
{
    public function index()
    {
        $data['title'] = 'Data Barang';
        $data['barang'] = $this->model('Barang_model')->tampil();

        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('templates/sidebar', $data);
        $this->view('barang/index', $data);
        $this->view('templates/footer');
    }

    public function formtambah()
    {
        $data['title'] = 'Tambah Data Barang';

        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('templates/sidebar', $data);
        $this->view('barang/tambah_data', $data);
        $this->view('templates/footer');
    }

    public function ubahmodal()
    {
        $id = $_POST['id'];
        $data['ubahdata'] = $this->model('Barang_model')->ubah($id);

        $this->view('barang/ubah_data1', $data);
    }

    public function tambah()
    {
        $namaFile = $_FILES['gambar']['name'];  
        $namaSementara = $_FILES['gambar']['tmp_name'];  
        $dirUpload = "assets/image/";  
        move_uploaded_file($namaSementara, $dirUpload . $namaFile);
        if ($this->model('Barang_model')->tambah($_POST, $namaFile) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: '.BASEURL. 'barang');
            exit;
        }
    }

    public function prosesubah()
    {
        $namaFile = $_FILES['gambar']['name'];  
        $namaSementara = $_FILES['gambar']['tmp_name'];  
        $dirUpload = "assets/image/";  
        move_uploaded_file($namaSementara, $dirUpload . $namaFile);
        if ($this->model('Barang_model')->prosesubah($_POST, $namaFile) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . 'Barang');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Barang_model')->proseshapus($id)) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . 'Barang');
            exit;
        }
    }
}
