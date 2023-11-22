<?php

//Include file koneksi, untuk koneksikan ke database
include "koneksi.php";

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
        $nama=$_POST["nama"];
        $nim=$_POST["nim"];
        $jeniskelamin=$_POST["jenis_kelamin"];
        $tempatlahir=$_POST["tempat_lahir"];
        $tanggallahir=$_POST["tanggal_lahir"];

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
            header("Location:view_data.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }

    }

    ?>