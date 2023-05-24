<div class="container">
  <?php foreach($data['ubahdata'] as $row): ?>
<form action="<?= BASEURL ?>Barang/prosesubah" method="post" enctype="multipart/form-data">
  <input type="hidden" value="<?=$row['id']?>" name="id">
  <div class="row">
    <div class="col-6">
      <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" value="<?=$row['nama']?>" name="nama">
      </div>
      <div class="form-group">
        <label>Harga</label>
        <input type="text" class="form-control" value="<?=$row['harga']?>" name="harga">
      </div>
      <div class="form-group">
        <label>Stok</label>
        <input type="text" class="form-control" value="<?=$row['stok']?>" name="stok">
      </div>
  <div class="form-group">
    <label>Gambar</label>
    <input type="file" class="form-control" placeholder="Gambar" name="gambar">
  </div>
        <button type="submit" class="btn btn-primary">Submit</button>      
    </div>
  </div>
</div>

</form>
<?php endforeach; ?>