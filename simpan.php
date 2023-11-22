<?php

include 'koneksi.php';

$nama=$_POST["nama"];
$nim=$_POST["nim"];
$jeniskelamin=$_POST["jenis_kelamin"];
$tempatlahir=$_POST["tempat_lahir"];
$tanggallahir=$_POST["tanggal_lahir"];


        //Query input menginput data kedalam tabel anggota
        $sql="insert into anggota (nama,nim,jenis_kelamin,tempat_lahir,tanggal_lahir) values
		('$nama','$nim','$jeniskelamin','$tempatlahir','$tanggallahir')";

        //Mengeksekusi/menjalankan query diatas
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:view_data.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }
?>