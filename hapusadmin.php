<?php
include 'koneksi.php';
//menangkpa dadat id yang akan di kirim dari Url 
$id = $_GET['id'];
//menghapus data dari database 
mysqli_query($kon, "DELETE FROM users WHERE id = '$id' ");
//mengalihkan halam kembali ke index.php 
header("location:data_admin.php");
?>