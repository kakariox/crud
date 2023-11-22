<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tahap Pengembangan</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <style>
        /* Tambahkan CSS untuk membuat dropdown muncul saat dihover */
        .nav-item.dropdown:hover .dropdown-menu {
        display: block;
    }
  </style>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<?php
session_start();
include 'koneksi.php';
// Periksa apakah pengguna sudah login
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Jika pengguna belum login, arahkan ke halaman login
    header('Location: login.html');
    exit;
} 
?>


<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="indexx.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item dropdown d-none d-sm-inline-block">
    <a class="nav-link dropdown-toggle" href="#" id="contactDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Contact
    </a>
    <div class="dropdown-menu" aria-labelledby="contactDropdown">
        <a class="dropdown-item" href="https://www.instagram.com/kaka_rhyo/"><img src="ig.svg" alt="TikTok Icon" class="tiktok-icon" height="18" width="18"> Instagram</a>
        <a class="dropdown-item" href="https://wa.me/621344823021"><img src="wa.svg" alt="TikTok Icon" class="tiktok-icon" height="18" width="18"> WhatsApp</a>
        <a class="dropdown-item" href="https://www.tiktok.com/@putrix_1?is_from_webapp=1&sender_device=pc">
        <img src="tiktok.svg" alt="TikTok Icon" class="tiktok-icon" height="18" width="18"> TikTok
        </a>
    </div>
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

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
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
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
        <img src="rio.jpeg" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
        <a href="profile.php" class="d-block"><?php echo $_SESSION['admin_name']; ?></a>
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
          <li class="nav-item menu">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="view_data.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                  <p>Data Mahasiswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="data_admin.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Admin</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item menu">
            <a href="input.php" class="nav-link">
              <i class="nav-icon fas fa-plus"></i>
              <p>
                Input Data
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Charts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Dbatang.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Diagram Pie</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="bar.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Diagram Batang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inline</p>
                </a>
              </li>
            </ul></li>
          <li class="nav-header">Others</li>
          <li class="nav-item">
          <li class="nav-item menu">
            <a href="text_editor.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Text Editor
              </p>
            </a>
          </li>
          </li>
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
              <li class="breadcrumb-item active">Dashboard v1</li>
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
                    include('koneksi.php');
                    $data_mhs = mysqli_query($kon, "select * from anggota");
                    $jumlah_mhs = mysqli_num_rows($data_mhs);
                ?>
                <h3><?php echo "$jumlah_mhs"; ?></h3>

                <p>Jumlah Mahasiswa</p>
              </div>
              <div class="icon">
              <i class="bi bi-people-fill"></i>
              <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
</svg>
              </div>
              <a href="view_data.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <?php
include("koneksi.php");

// Query untuk mengambil data jumlah mahasiswa per jenis kelamin
$query = "SELECT jenis_kelamin, COUNT(*) as jumlah FROM anggota GROUP BY LOWER(jenis_kelamin)";
$result = mysqli_query($kon, $query);


// Siapkan array untuk menyimpan data dari database
$data = array('labels' => array(), 'values' => array());

while ($row = mysqli_fetch_assoc($result)) {
    array_push($data['labels'], $row['jenis_kelamin']);
    array_push($data['values'], $row['jumlah']);
}


?>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <h3><?php echo isset($data['values'][array_search('Pria', $data['labels'])]) ? $data['values'][array_search('Pria', $data['labels'])] : 0; ?></h3>
            <p>Total Mahasiswa</p>
              </div>
              <div class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 24 24" fill="currentColor" transform: ;msFilter:;"><path d="M20 11V4h-7l2.793 2.793-4.322 4.322A5.961 5.961 0 0 0 8 10c-3.309 0-6 2.691-6 6s2.691 6 6 6 6-2.691 6-6c0-1.294-.416-2.49-1.115-3.471l4.322-4.322L20 11zM8 20c-2.206 0-4-1.794-4-4s1.794-4 4-4 4 1.794 4 4-1.794 4-4 4z"></path></svg>
              </div>
              <a href="Dbatang.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <h3><?php echo isset($data['values'][array_search('Wanita', $data['labels'])]) ? $data['values'][array_search('Wanita', $data['labels'])] : 0; ?></h3>
          <p>Total Mahasiswi</p>
              </div>
              <div class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 24 24" fill="currentColor" transform: ;msFilter:;"><path d="M12 2C8.691 2 6 4.691 6 8c0 2.967 2.167 5.432 5 5.91V17H8v2h3v2.988h2V19h3v-2h-3v-3.09c2.833-.479 5-2.943 5-5.91 0-3.309-2.691-6-6-6zm0 10c-2.206 0-4-1.794-4-4s1.794-4 4-4 4 1.794 4 4-1.794 4-4 4z"></path></svg>
              </div>
              <a href="Dbatang.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <?php
                    include('koneksi.php');
                    $data_admin = mysqli_query($kon, "select * from users");
                    $jumlah_admin = mysqli_num_rows($data_admin);
                ?>
                <h3><?php echo "$jumlah_admin"; ?></h3>

                <p>Jumlah Admin</p>
              </div>
              <div class="icon">
              <i class="fas fa-user-shield"></i>
              </div>
              <a href="data_admin.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>

          </div>
          <!-- ./col -->
        </div>
          <!-- ./col -->
          <!-- ./col -->
          
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <!-- /.row (main row) -->
             <!-- TO DO List -->
      <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  To Do List
                </h3>

                <div class="card-tools">
                  <ul class="pagination pagination-sm">
                    <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                  </ul>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <ul class="todo-list" data-widget="todo-list">
                  <li>
                    <!-- drag handle -->
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <!-- checkbox -->
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo1" id="todoCheck1">
                      <label for="todoCheck1"></label>
                    </div>
                    <!-- todo text -->
                    <span class="text">Kembangkan lagi dan tambahkan fitur pencarian menu</span>
                    <!-- Emphasis label -->
                    <small class="badge badge-danger"><i class="far fa-clock"></i> 5 hari</small>
                    <!-- General tools such as edit or delete-->
                    <div class="tools">
                      <i class="fas fa-edit edit-item"></i>
                      <i class="fas fa-trash-alt delete-item"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo2" id="todoCheck2" checked>
                      <label for="todoCheck2"></label>
                    </div>
                    <span class="text">Buat tabel data admin</span>
                    <small class="badge badge-info"><i class="far fa-clock"></i> 4 jam</small>
                    <div class="tools">
                    <i class="fas fa-edit edit-item"></i>
                      <i class="fas fa-trash-alt delete-item"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo3" id="todoCheck3">
                      <label for="todoCheck3"></label>
                    </div>
                    <span class="text">Tambahkan kalender</span>
                    <small class="badge badge-warning"><i class="far fa-clock"></i> 1 hari</small>
                    <div class="tools">
                    <i class="fas fa-edit edit-item"></i>
                      <i class="fas fa-trash-alt delete-item"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo4" id="todoCheck4">
                      <label for="todoCheck4"></label>
                    </div>
                    <span class="text">Fungsikan text editor</span>
                    <small class="badge badge-success"><i class="far fa-clock"></i> 3 hari</small>
                    <div class="tools">
                    <i class="fas fa-edit edit-item"></i>
                      <i class="fas fa-trash-alt delete-item"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo5" id="todoCheck5" checked>
                      <label for="todoCheck5"></label>
                    </div>
                    <span class="text">Buat tabel data mahasiswa</span>
                    <small class="badge badge-primary"><i class="far fa-clock"></i> 1 hari</small>
                    <div class="tools">
                      <i class="fas fa-edit edit-item"></i>
                      <i class="fas fa-trash-alt delete-item"></i>
                    </div>
                  </li>

                  
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo6" id="todoCheck6" checked>
                      <label for="todoCheck6"></label>
                    </div>
                    <span class="text">Perbaiki hover dari side bar</span>
                    <small class="badge badge-secondary"><i class="far fa-clock"></i> 5 menit</small>
                    <div class="tools">
                    <i class="fas fa-edit edit-item"></i>
                      <i class="fas fa-trash-alt delete-item"></i>
                    </div>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <button type="button" class="btn btn-primary float-right" id="addItemBtn">
                  <i class="fas fa-plus"></i> Add item
                </button>
              </div>

              </div>
    </section>
    <!-- /.content -->
     
  </div>
  
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    <strong>Modif &copy; 9-11-2023 by, <a href="https://www.instagram.com/kaka_rhyo/" target="_blank">Theodorus M.</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/pages/dashboard.js"></script>
<script>
  $(document).ready(function() {
    // Fungsi untuk menghapus item To-Do
    function deleteItem(item) {
      item.remove();
      
      // Simpan daftar ke localStorage setelah menghapus item
      saveTodoList();
    }

    // Fungsi untuk mengedit item To-Do
    function editItem(item) {
      var editText = prompt('Edit teks untuk item:', item.find('.text').text());

      if (editText !== null) {
        item.find('.text').text(editText);
        saveTodoList();
      }
    }

    // Tambahkan event listener untuk tombol edit pada setiap item
    $('.todo-list').on('click', '.edit-item', function() {
      var todoItem = $(this).closest('li');
      editItem(todoItem);
    });

    // Tambahkan event listener untuk tombol delete pada setiap item
    $('.todo-list').on('click', '.delete-item', function() {
      var todoItem = $(this).closest('li');
      deleteItem(todoItem);
    });

    // Fungsi untuk menambahkan item baru
    function addItem() {
      var newItemText = prompt('Masukkan teks untuk item baru:');

      if (newItemText) {
        var newItem = $('<li>\
          <span class="handle">\
            <i class="fas fa-ellipsis-v"></i>\
            <i class="fas fa-ellipsis-v"></i>\
          </span>\
          <div class="icheck-primary d-inline ml-2">\
            <input type="checkbox" value="" name="newTodo" id="newTodoCheck">\
            <label for="newTodoCheck"></label>\
          </div>\
          <span class="text">' + newItemText + '</span>\
          <small class="badge badge-info"><i class="far fa-clock"></i> Baru</small>\
          <div class="tools">\
            <i class="fas fa-edit edit-item"></i>\
            <i class="fas fa-trash-alt delete-item"></i>\
          </div>\
        </li>');

        $('.todo-list').append(newItem);
        saveTodoList();
      }
    }

    // Tambahkan event listener untuk tombol Add Item
    $('#addItemBtn').on('click', addItem);

    // Fungsi untuk menyimpan daftar ke localStorage
    function saveTodoList() {
      var todoListHTML = $('.todo-list').html();
      localStorage.setItem('todoList', todoListHTML);
    }

    // Cek apakah ada daftar di localStorage saat memuat halaman
    var storedTodoList = localStorage.getItem('todoList');
    if (storedTodoList) {
      $('.todo-list').html(storedTodoList);
    }
  });
</script>



</body>
</html>
