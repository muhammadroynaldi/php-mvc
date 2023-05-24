<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">Admin</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item" id="logout" data-toggle="modal" data-target="#myModal">
            Logout
          </a>
        </div>
      </li>
    </ul>
  </nav>

  <script>
    $('#logout').on('click', function(){
      let keluar = '<a href="<?=BASEURL?>Log/logout" class="btn btn-secondary" style="background: #0073e6; color: #fff;">Logout</a>';
      $('.modal-title').html('Logout');
      $('.modal-body').html('Anda Ingin Keluar dari RoYogAlam?');
      $('#close').html('Tidak');
      $('.tombol').html(keluar);
      $('#modal-size').attr('class', 'modal-dialog modal-sm');
    });
  </script>

  
