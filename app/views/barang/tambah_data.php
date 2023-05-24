<div class="container">
<form action="<?= BASEURL ?>Barang/tambah" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="col-6">
      <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" placeholder="Nama" name="nama">
      </div>
      <div class="form-group">
        <label>Harga</label>
        <input type="text" class="form-control" placeholder="Harga" name="harga">
      </div>
      <div class="form-group">
        <label>Stok</label>
        <input type="text" class="form-control" placeholder="Stok" name="stok">
      </div>
  <div class="form-group">
    <label>Gambar</label>
    <input type="file" placeholder="Gambar" name="gambar">
  </div>
        <button type="submit" class="btn btn-primary">Submit</button>      
    </div>
  </div>
</div>
</form>