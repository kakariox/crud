<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <title>Tahap Pengembangan</title>
  <style>
    
.contactButton {
  background: #7079f0;
  color: white;
  font-family: inherit;
  padding: 0.45em;
  padding-left: 1.0em;
  font-size: 17px;
  font-weight: 500;
  border-radius: 0.9em;
  border: none;
  letter-spacing: 0.05em;
  display: flex;
  align-items: center;
  box-shadow: inset 0 0 1.6em -0.6em #714da6;
  overflow: hidden;
  position: relative;
  height: 2.8em;
  padding-right: 3em;
}

.iconButton {
  margin-left: 1em;
  position: absolute;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 2.2em;
  width: 2.2em;
  border-radius: 0.7em;
  box-shadow: 0.1em 0.1em 0.6em 0.2em #7a8cf3;
  right: 0.3em;
  transition: all 0.3s;
}


.contactButton:hover {
  transform: translate(-0.05em, -0.05em);
  box-shadow: 0.15em 0.15em #5566c2;
}

.contactButton:active {
  transform: translate(0.05em, 0.05em);
  box-shadow: 0.05em 0.05em #5566c2;
}

    /* Tambahkan CSS untuk membuat dropdown muncul saat dihover */
    .nav-item.dropdown:hover .dropdown-menu {
        display: block;
    }
  </style>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<?php session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Jika pengguna belum login, arahkan ke halaman login
    header('Location: login.html');
    exit;
} ?>
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
            <input class="form-control form-control-navbar" type="search" placeholder="Search by Name" aria-label="Search" id="searchInput">
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
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
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
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
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
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="rio.jpeg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="profile.php" class="d-block" data-toggle="tooltip" data-placement="top" title="Pinjam dulu 100 :v"><?php echo $_SESSION['admin_name']; ?></a>
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
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="view_data.php" class="nav-link active">
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

        </ul>
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Mahasiswa</h1>
            
<!-- Contoh tooltip menggunakan HTML dan Bootstrap -->

          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="indexx.php">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
            <div class="col-12">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="btn-group mb-3">
      <button class="contactButton" onclick="pindahKeHalaman()" data-toggle="tooltip" data-placement="top" title="Tambahkan Mahasiswa Baru">Tambah Data
    <div class="iconButton">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path fill="currentColor" d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"></path></svg>
  </div>
    </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>
<div class="btn-group mb-3">
<button type="button" class="btn btn-primary" onclick="exportToPDF()">Export PDF</button>
    <button type="button" class="btn btn-secondary" onclick="printTable()">Print</button>
</div>
        <div class="row">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover" id="mahasiswa-table">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th data-toggle="tooltip" data-placement="top" title="urutkan berdasarkan nama">Nama</th>
                    <th>NIM</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  include "koneksi.php";

                  $sql="select * from anggota order by nim asc";

                  $hasil=mysqli_query($kon,$sql);
                  $no=0;
                  while ($data = mysqli_fetch_array($hasil)) {
                  $no++;

                  ?>
            <tr>
                <td class="centered"><?php echo $no;?></td>
                <td><?php echo $data["nama"];   ?></td>
                <td><?php echo $data["nim"];   ?></td>
                <td class="centered"><?php echo $data["jenis_kelamin"];   ?></td>
                <td class="centered"><?php echo $data["tempat_lahir"];   ?></td>
                <td class="centered"><?php echo $data["tanggal_lahir"]; ?></td>
                
                <td><div class="centered">
                    <a href="edit.php?nim=<?php echo htmlspecialchars($data['nim']); ?>" class="btn btn-warning" role="button" data-toggle="tooltip" data-placement="top" title="Edit data mahasiswa">Edit</a>
                    <a href="hapus.php?nim=<?php echo $data['nim']; ?>" class="btn btn-danger" role="button" data-toggle="tooltip" data-placement="top" title="Hapus data Mahasiswa" onclick="return confirm('Apakah Anda yakin ingin menghapus <?php echo $data['nama']; ?>?');">Hapus</a>
                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalViewData<?php echo $data['nim']; ?>">
                        Detail
                    </button></div>
                           <!-- Modal -->
                    <div class="modal fade" id="modalViewData<?php echo $data['nim']; ?>" tabindex="-1" aria-labelledby="modalViewDataLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title fw-bold text-white" id="modalViewDataLabel">
                            <i class="fa fa-list"></i>  &nbsp;Detail Anggota
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      
                    <div class="row">
                       
                        <div class="col-sm-4">
                            Nama mahasiswa <br />
                            NIM<br />
                            Jenis kelamin<br />
                            Tempat lahir<br />
                            Tanggal lahir
                        </div>

                        <div class="col-sm-8">
                        : <?php echo $data['nama']?><br /> 
                        : <?php echo $data['nim']?> <br />
                        : <?php echo $data['jenis_kelamin']?><br /> 
                        : <?php echo $data['tempat_lahir']?> <br />
                        : <?php echo $data['tanggal_lahir']?>

                        </div>
                    </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-times"></i>&nbsp; Tutup</button>
                    </div>
                </div>
            </div>
        </div>        
                    <!--<a href="detail.php?nim=<?php echo htmlspecialchars($data['nim']); ?>" class="btn btn-info" role="button">Detail</a>-->
                </td>
            </tr>
            <?php
        }
        ?>

                  </tbody>
                </table>
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.13/jspdf.plugin.autotable.min.js"></script>
<script>
    function exportToPDF() {
        const { jsPDF } = window.jspdf;
        const pdf = new jsPDF();

        // Tambahkan judul PDF
        pdf.text('Daftar Mahasiswa', 15, 15);

        // Tambahkan isi tabel
        pdf.autoTable({ html: '#mahasiswa-table' });

        // Simpan file PDF
        pdf.save('daftar_mahasiswa.pdf');
    }

    function printTable() {
        window.print();
    }
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Page specific script -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });

  function pindahKeHalaman() {
            window.location.href = "input.php";
        }

        $(document).ready(function() {
    var table = $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });

    // Menerapkan fungsi pencarian di semua kolom
    $('#searchInput').on('keyup', function() {
      table.search(this.value).draw();
    });
  });
</script>

</body>
</html>
