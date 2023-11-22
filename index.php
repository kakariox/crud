<!DOCTYPE html>
<html>
<head>
    <!-- Load file CSS Bootstrap offline -->
   <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<style>
    body {
    background-image: url('bg.jpg');        
    background-size: cover; /* Untuk menjaga gambar latar belakang selalu menutupi layar */
    background-repeat: no-repeat; /* Untuk menghindari pengulangan gambar */
    background-attachment: fixed; /* Opsi ini membuat gambar latar belakang tetap diam saat menggulir halaman */
    background-position: center; /* Untuk mengatur posisi gambar latar belakang */
}

table {
  border-collapse: collapse; /* Ini menggabungkan batas-batas sel, sehingga garis terlihat lebih rapi */
  border: 3px solid black;
  
}
tbody, tr{
  border: 3px solid black; /* Ini mengatur warna garis sel menjadi merah */
}
/* Gaya untuk elemen <th> dengan kelas "highlighted" */

th.highlighted {
  background-color: #FFD700; /* Warna latar belakang kuning */
  color: #000; /* Warna teks hitam */
}

/* Gaya untuk elemen <th> secara umum */
th {
  background-color: #3498db; /* Warna latar belakang biru */
  color: black;
  font-weight: bold; /* Teks tebal */
  padding: 10px; /* Spasi dalam sel <th> */
}


h4{
    font-size: 25px;
    background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(42,42,218,0.7765231092436975) 35%, rgba(0,212,255,1) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
.centered {
  text-align: center; /* Untuk rata tengah secara horisontal */
  vertical-align: middle; /* Untuk rata tengah secara vertikal */
}

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


nav {
  background-color: skyblue;
  display: flex;
  justify-content: space-between;
  padding: 0.5rem 1rem;
}

nav ul {
  display: flex;
  align-items: center;
  gap: 2rem;
  list-style: none;
}

nav div img {
  width: 70px;
}


nav ul li a {
  text-decoration: none;
  font-family: "Segoe UI", sans-serif;
  color: #191919;
  font-weight: 600;
  padding: 8px 0;
  transition: all;
  transition-duration: 300ms;
  border-bottom: 1px solid rgba(255, 68, 0, 0);
}

nav ul li a:hover {
  color: blue;
  border-bottom: 1px solid blue;
}
</style>
</head>
<body>
<nav>
      <div class="">
        <a href="https://www.instagram.com/kaka_rhyo/" target="_blank"><img src="mylogo.png" alt="my-logo" /></a>
      </div>
      <ul>
        <li>
          <a href="index.php">Home</a>
        </li>
        <li>
          <a href="https://drive.google.com/file/d/1MRq2ctlzR18Zn10VGSBY1Cm9CPkoRf9p/view?usp=drive_link" target="_blank">Source Code</a>
        </li>
        <li>
          <a href="#">Contact</a>
        </li>
        <li>
          <a href="login.html">Log Out</a>
        </li>
      </ul>
    </nav>
<div class="container">
    <br><br>
    <h4>CRUD Sederhana dengan PHP dan Bootstrap</h4>
    <caption>TABEL MAHASISWA</caption>
<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Jika pengguna belum login, arahkan ke halaman login
    header('Location: login.html');
    exit;
}

    include "koneksi.php";

    //Cek apakah ada kiriman form dari method post
    if (isset($_GET['nim'])) {
        $nim=htmlspecialchars($_GET["nim"]);

        $sql="delete from anggota where nim='$nim' ";
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak
            if ($hasil) {
                header("Location:index.php");

            }
            else {
                echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";

            }
        }
    
?>
    <table class="table table-bordered table-hover">
        <br>
        <thead>
        <tr>
            <th class="centered">No</th>
            <th class="centered">Nama</th>
            <th class="centered">NIM</th>
            <th class="centered">Jenis kelamin</th>
            <th class="centered">Tempat lahir</th>
            <th class="centered">Tanggal lahir</th>
            <th class="centered" colspan='2'>Aksi</th>

        </tr>
        </thead>
        <?php
        include "koneksi.php";
        $sql="select * from anggota order by nim asc";

        $hasil=mysqli_query($kon,$sql);
        $no=0;
        while ($data = mysqli_fetch_array($hasil)) {
            $no++;

            ?>
            <tbody>
            <tr>
                <td class="centered"><?php echo $no;?></td>
                <td><?php echo $data["nama"];   ?></td>
                <td><?php echo $data["nim"];   ?></td>
                <td class="centered"><?php echo $data["jenis_kelamin"];   ?></td>
                <td class="centered"><?php echo $data["tempat_lahir"];   ?></td>
                <td class="centered"><?php echo $data["tanggal_lahir"]; ?></td>
                
                <td><div class="centered">
                    <a href="update.php?nim=<?php echo htmlspecialchars($data['nim']); ?>" class="btn btn-warning" role="button">Edit</a>
                    <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>?nim=<?php echo $data['nim']; ?>" class="btn btn-danger" role="button">Hapus</a>
                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalViewData<?php echo $data['nim']; ?>">
                        Detail
                    </button></div>
                           <!-- Modal -->
                    <div class="modal fade" id="modalViewData<?php echo $data['nim']; ?>" tabindex="-1" aria-labelledby="modalViewDataLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title fw-bold text-white" id="modalViewDataLabel">
                            <i class="fa fa-list"></i>Detail Anggota
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
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-times"></i>Tutup</button>
                    </div>
                </div>
            </div>
        </div>        
                    <!--<a href="detail.php?nim=<?php echo htmlspecialchars($data['nim']); ?>" class="btn btn-info" role="button">Detail</a>-->
                </td>
            </tr>
            </tbody>
            <?php
        }
        ?>
    </table>
    <button class="contactButton" onclick="pindahKeHalaman()">Tambah Data
    <div class="iconButton">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path fill="currentColor" d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"></path></svg>
  </div>
    </button>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script>
                function pindahKeHalaman() {
            window.location.href = "create.php";
        }
    </script><br>
<h5>IJIN PAK MOHON AGAR TERSAMBUNG KE INTERNET <br>AGAR DETAIL DAN BACKGROUND BERFUNGSI🙏</h5>
</div>
</body>
</html>