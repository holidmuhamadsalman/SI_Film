<?php
  include '../config.php';
  include './../user/proses-login.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../app/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../app/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../app/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../app/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../app/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../app/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../app/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../app/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed dark-mode">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center dark-mode">
    <img class="animation__shake" src="../app/dist/img/SiFilm.png" alt="AdminLTELogo" width="240" height="80">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-light dark-mode">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
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
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../app/dist/img/SiFilm.png" alt="SIFilm Logo" class="brand-image img-circle elevation-3" style="opacity: .6">
      <br>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <?php
          $sql = mysqli_query($conn,"SELECT * FROM login") or die(mysqli_error($con));
          $data = mysqli_fetch_array($sql);
        ?>
        <div class="image">
          <?php if(($data['foto_user']) == NULL){?>
            <?php echo "<img src=../include/img-user/avatar5.png class=img-circle elevation-2 alt=User Image>";
          } else {
           echo "<img src=../include/img-user/$data[foto_user] class=img-circle elevation-2 alt=User Image>";
          } ?>
        </div>
        <div class="info">
          <a class="d-block"><?=$data['nama']?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="index.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
                <a href="user/index.php" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>Data User</p>
                </a>
          </li>
          <li class="nav-item">
                <a href="film/index.php" class="nav-link">
                  <i class="fas fa-film nav-icon"></i>
                  <p>Data Film</p>
                </a>
          </li>
          <li class="nav-item">
                <a href="aktor/index.php" class="nav-link">
                  <i class="fas fa-user-secret nav-icon"></i>
                  <p>Data Aktor</p>
                </a>
          </li>
          <li class="nav-item">
                <a href="aktor/index.php" class="nav-link">
                  <i class="fas fa-user nav-icon"></i>
                  <p>Data Sutradara</p>
                </a>
          </li>
          <li class="nav-item">
                <a href="peran/index.php" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Data Peran</p>
                </a>
          </li>
          <li class="nav-item">
                <a href="produksi/index.php" class="nav-link">
                  <i class="fas fa-video nav-icon"></i>
                  <p>Data Produksi</p>
                </a>
          </li>
          <li class="nav-item">
                <a href="genre/index.php" class="nav-link">
                  <i class="fas fa-theater-masks nav-icon"></i>
                  <p>Data Genre</p>
                </a>
          </li>
          <li class="nav-item">
                <a href="aktor/index.php" class="nav-link">
                  <i class="fas fa-images nav-icon"></i>
                  <p>Data Foto</p>
                </a>
          </li>
          <li class="nav-item">
                <a href="aktor/index.php" class="nav-link">
                  <i class="fas fa-splotch nav-icon"></i>
                  <p>Data Rating</p>
                </a>
          </li>
          <li class="nav-item">
                <a href="../logout.php" class="nav-link bg-black">
                  <i class="fas fa-sign-out-alt nav-icon"></i>
                  <p>Log Out</p>
                </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php
                  $film = mysqli_query($conn, "SELECT * FROM film");
                  if($tot_film = mysqli_num_rows($film)){
                    echo '<h3>'.$tot_film.'</h3>';
                  } else {
                    echo '<h3> 0 </h3>';
                  }
                ?>
                <p>Data Film</p>
              </div>
              <div class="icon">
                <i class="fas fa-film"></i>
              </div>
              <a href="film/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php
                  $aktor = mysqli_query($conn, "SELECT * FROM aktor");
                  if($tot_aktor = mysqli_num_rows($aktor)){
                    echo '<h3>'.$tot_aktor.'</h3>';
                  } else {
                    echo '<h3> 0 </h3>';
                  }
                ?>
                <p>Data Aktor</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-secret"></i>
              </div>
              <a href="aktor/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <?php
                  $user = mysqli_query($conn, "SELECT * FROM login");
                  if($tot_user = mysqli_num_rows($user)){
                    echo '<h3>'.$tot_user.'</h3>';
                  } else {
                    echo '<h3> 0 </h3>';
                  }
                ?>
                <p>Data User</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="user/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <?php
                  $sutradara = mysqli_query($conn, "SELECT * FROM sutradara");
                  if($tot_sutradara = mysqli_num_rows($sutradara)){
                    echo '<h3>'.$tot_sutradara.'</h3>';
                  } else {
                    echo '<h3> 0 </h3>';
                  }
                ?>
                <p>Data Sutradara</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="sutradara/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <?php //include './detail_film/index.php';?>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2023 <a href="http://localhost/SI_Film/">SIFilm</a>.</strong>
    All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../app/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../app/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../app/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../app/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../app/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../app/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../app/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../app/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../app/plugins/moment/moment.min.js"></script>
<script src="../app/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../app/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../app/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../app/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../app/dist/js/adminlte.js"></script>
</body>
</html>