<div class="container">
  <?php foreach($data['ubahdata'] as $row): ?>
<form action="<?= BASEURL ?>User/prosesubah" method="post" enctype="multipart/form-data">
  <input type="hidden" value="<?=$row['id']?>" name="id">
  <div class="row">
    <div class="col-6">
      <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" value="<?=$row['nama']?>" name="nama">
      </div>
      <div class="form-group">
        <label>Username</label>
        <input type="text" class="form-control" value="<?=$row['username']?>" name="username">
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="text" class="form-control" value="<?=$row['password']?>" name="password">
      </div>
        <button type="submit" class="btn btn-primary">Submit</button>      
    </div>
  </div>
</div>

</form>
<?php endforeach; ?>