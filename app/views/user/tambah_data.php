<div class="container">
<form action="<?= BASEURL ?>User/tambah" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="col-6">
      <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" placeholder="Nama" name="nama">
      </div>
      <div class="form-group">
        <label>Username</label>
        <input type="text" class="form-control" placeholder="Username" name="username">
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="text" class="form-control" placeholder="Password" name="password">
      </div>
        <button type="submit" class="btn btn-primary">Submit</button>      
    </div>
  </div>
</div>
</form>