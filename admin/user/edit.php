<?php
  include "../../config.php";
  $query = mysqli_query($conn, "SELECT * FROM login WHERE username='$_GET[username]'");
  $row = mysqli_fetch_assoc($query);
  if (isset($_GET['username'])) {
    $username = ($_GET["username"]);

    $query = "SELECT * FROM login WHERE username='$username'";
    $result = mysqli_query($conn, $query);
    if(!$result){
      die ("Query Error: ".mysqli_errno($conn)." - ".mysqli_error($conn));
    }
    $data = mysqli_fetch_assoc($result);
    if (!count($data)) {
      echo "<script>alert('Data tidak ditemukan pada database');window.location='index.php';</script>";
    }
  } else {
      echo "<script>alert('Masukkan data username.');window.location='index.php';</script>";
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data User</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../app/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../app/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../app/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../app/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../app/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../app/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../app/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../app/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed dark-mode">
<div class="wrapper">

  <!-- Preloader -->
  <?php include '../../include/preloader.php'?>

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
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include '../../include/sidebar.php'?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Data User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="../index.php">Data User</a></li>
              <li class="breadcrumb-item active">Edit Data User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        <form action="proses_edit.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="username" value="<?=$row['username']?>">
          <div class="col-12">
            <div class="card">
              <!-- <div class="card-header">
                  Tambah Data
              </div> -->
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="username" class="col-form-label">Username</label>
                        <input type="text" class="form-control" name="username" value="<?= $row['username']; ?>" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="nama" class="col-form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" value="<?= $row['nama']; ?>" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="email" class="col-form-label">E-mail</label>
                        <input type="text" class="form-control" name="email" value="<?= $row['email']; ?>" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="password" class="col-form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" value="<?= $row['password']; ?>" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="password" class="col-form-label">Konfirmasi Password</label>
                        <input type="password" class="form-control" id="password2" name="password2" value="<?= $row['password']; ?>" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                    <label for="role">Role</label>
                    <select class="form-control select2" style="width: 100%;" name="role">
                      <option value="<?= $row['role']?>"><?= $row['role']?></option>
                      <option value="admin">admin</option>
                      <option value="user">user</option>
                    </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                      <label for="foto_user" class="col-form-label">Foto</label>
                      <?php if($row['foto_user'] == NULL && $row['role'] == 'admin'){
                        echo "<p><img src=../../include/img-user/avatar5.png style=height:100px; float:center; margin-bottom: 5px;></p>";
                      } elseif ($row['foto_user'] == NULL && $row['role'] == 'user'){
                        echo "<p><img src=../../include/img-user/user.png style=height:100px; float:center; margin-bottom: 5px;></p>";
                      } else {
                        echo "<p><img src=../../include/img-user/$row[foto_user] style=height:100px; float:center; margin-bottom: 5px;></p>";
                      } ?>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="foto_user" name="foto_user" accept="image/*">
                            <label class="custom-file-label" for="foto_user">Choose file</label>
                          </div>
                        </div>
                        <i style="float: left;font-size: 11px;color: yellow">*Abaikan jika tidak mengubah foto</i>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-1">
                        <a href="index.php" type="button" class="btn btn-secondary mt-2">Batal</a>
                        <button type="submit" class="btn btn-primary mt-2">Ubah</button>
                    </div>
                </div>
            </div>
            <!-- /.row -->
          </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </form>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Footer -->
  <?php include '../../include/footer.php'?>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../app/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../app/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../app/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../app/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../app/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../../app/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../app/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../app/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../app/plugins/moment/moment.min.js"></script>
<script src="../../app/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../app/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../app/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../app/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../app/dist/js/adminlte.js"></script>
<!-- foto -->
<script>
  $(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });
</script>
</body>
</html>