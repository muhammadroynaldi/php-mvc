<?php

class User extends Controller
{
    public function index()
    {
        $data['title'] = 'Data User';
        $data['user'] = $this->model('User_model')->tampil();

        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('templates/sidebar', $data);
        $this->view('user/index', $data);
        $this->view('templates/footer');
    }

    public function formtambah()
    {
        $data['title'] = 'Tambah Data User';

        $this->view('templates/header', $data);
        $this->view('templates/topbar');
        $this->view('templates/sidebar', $data);
        $this->view('user/tambah_data', $data);
        $this->view('templates/footer');
    }

    public function ubahmodal()
    {
        $id = $_POST['id'];
        $data['ubahdata'] = $this->model('User_model')->ubah($id);

        $this->view('user/ubah_data1', $data);
    }

    public function tambah()
    {
        if ($this->model('User_model')->tambah($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: '.BASEURL. 'user');
            exit;
        }
    }

    public function prosesubah()
    {
        if ($this->model('User_model')->prosesubah($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . 'User');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('User_model')->proseshapus($id)) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . 'User');
            exit;
        }
    }
}
