<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Mahasiswa</title>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <?php
    //Include file koneksi, untuk koneksikan ke database
    include "koneksi.php";

    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nama=input($_POST["nama"]);
        $nim=input($_POST["nim"]);
        $jeniskelamin=input($_POST["jenis_kelamin"]);
        $tempatlahir=input($_POST["tempat_lahir"]);
        $tanggallahir=input($_POST["tanggal_lahir"]);
        

        //Query input menginput data kedalam tabel anggota
        $sql="insert into anggota (nama,nim,jenis_kelamin,tempat_lahir,tanggal_lahir) values
		('$nama','$nim','$jeniskelamin','$tempatlahir','$tanggallahir')";

        //Mengeksekusi/menjalankan query diatas
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:index.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }

    }
    ?>
            </div>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    <h3>Input Data Mahasiswa</h3>
        <div class="form-group">
        <span>Nama:</span>
            <input type="text" name="nama" class="form-control" required="required"/>            <i></i>
         </div>
         <div class="form-group">
            <label>NIM:</label>
            <input type="text" name="nim" class="form-control" placeholder="Masukan NIM anda" required/>
         </div>
        <div class="form-group">
        <label>Jenis kelamin:</label>
        <input type="radio" name="jenis_kelamin" value="Pria"> Pria
        <input type="radio" name="jenis_kelamin" value="Wanita"> Wanita
        </div>

        <div class="form-group">
            <label>tempat lahir:</label>
            <textarea name="tempat_lahir" class="form-control" rows="5"placeholder="ose pu tempat lahir" required></textarea>

        </div>
        <div class="form-group">
            <label>tanggal lahir:</label>
            <input type="date" name="tanggal_lahir" class="form-control" required/>
        </div>
        </form>
        <button type="submit" name="submit" class="btn btn-info">Submit</button>
</div>
</body>
</html>