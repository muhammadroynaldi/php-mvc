<?php

class Barang_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function tambah($data,$namaFile)
    {

        $query = "INSERT INTO barang VALUES ('', :nama, :harga, :stok, :gambar)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('stok', $data['stok']);
        $this->db->bind('gambar',$namaFile);
       
       
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function tampil()
    {
        $this->db->query("SELECT * FROM barang ORDER BY id ASC");
        return $this->db->resultSet();
    }

    public function ubah($id)
    {
        $this->db->query("SELECT * FROM barang WHERE id = :id");
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }

    public function prosesubah($data,$namaFile)
    {
        $query = "UPDATE barang SET nama = :nama, harga = :harga, stok = :stok, gambar = :gambar WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('stok', $data['stok']);
        $this->db->bind('gambar',$namaFile);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function proseshapus($id)
    {
        $query = "DELETE FROM barang WHERE id=:id";

        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

}
