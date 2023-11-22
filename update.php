<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Anggota</title>
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
    //Cek apakah ada nilai yang dikirim menggunakan methos GET dengan nama id_anggota
    if (isset($_GET['nim'])) {
        $nim=input($_GET["nim"]);

        $sql="select * from anggota where nim=$nim";
        $hasil=mysqli_query($kon,$sql);
        $data = mysqli_fetch_assoc($hasil);


    }

    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nim=htmlspecialchars($_POST["nim"]);
        $nama=input($_POST["nama"]);
        $nim=input($_POST["nim"]);
        $jeniskelamin=input($_POST["jenis_kelamin"]);
        $tempatlahir=input($_POST["tempat_lahir"]);
        $tanggallahir=input($_POST["tanggal_lahir"]);

        //Query update data pada tabel anggota
        $sql="update anggota set
			nama='$nama',
			nim='$nim',
			jenis_kelamin='$jeniskelamin',
			tempat_lahir='$tempatlahir',
            tanggal_lahir='$tanggallahir'
			where nim=$nim";

        //Mengeksekusi atau menjalankan query diatas
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

    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <h2>Update Data Mahasiswa</h2>
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" class="form-control" value="<?php echo $data['nama']; ?>" placeholder="Masukan Nama" required/>

        </div>
        <div class="form-group">
            <label>NIM:</label>
            <textarea name="nim" class="form-control" rows="5" placeholder="Masukan ose pu nim" required><?php echo $data['nim']; ?></textarea>

        </div>
        <div class="form-group">
        <label>Jenis kelamin:</label>
        <input type="radio" name="jenis_kelamin" value="Pria"> Pria
        <input type="radio" name="jenis_kelamin" value="Wanita"> Wanita
        </div>

        <div class="form-group">
            <label>tempat lahir:</label>
            <textarea name="tempat_lahir" class="form-control" rows="5"placeholder="ose pu tempat lahir" required><?php echo $data['tempat_lahir']; ?></textarea>
        </div>

        <div class="form-group">
            <label>tanggal lahir:</label>
            <input type="date" name="tanggal_lahir" class="form-control" required/>
        </div>

        <input type="hidden" name="nim" value="<?php echo $data['nim']; ?>" />

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>