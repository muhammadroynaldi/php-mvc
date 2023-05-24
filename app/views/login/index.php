<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?=$data['title']?></title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="<?=BASEURL?>assets/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?=BASEURL?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="<?=BASEURL?>assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box" style="background: #0073e6;">
  <div class="login-logo">
    <a href="#" style="color: #fff;"><b>USER</b>LOGIN</a>
  </div>
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Admin Silahkan Masuk</p>

      <form action="<?=BASEURL?>Log/login" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="<?=BASEURL?>assets/plugins/jquery/jquery.min.js"></script>
<script src="<?=BASEURL?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?=BASEURL?>assets/dist/js/adminlte.min.js"></script>
</body>
</html>
