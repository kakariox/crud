<?php
// Include file koneksi
//include "koneksi.php";

// Ambil ID data yang akan dihapus dari parameter URL
//if (isset($_GET["nim"])) {
//    $id = $_GET["nim"];
    
    // Query penghapusan data berdasarkan ID
//    $sql = "DELETE FROM anggota WHERE nim=$nim";
    
    // Eksekusi query penghapusan
 //   $hasil = mysqli_query($kon, $sql);

   // if ($hasil) {
        // Redirect ke halaman lain setelah penghapusan selesai
     //   header("Location: view_data.php");
    //} else {
      //  echo "Gagal menghapus data.";
    //}
//} else {
  //  echo "ID data tidak valid.";
//}
//koneksi database 
include 'koneksi.php';
//menangkpa dadat id yang akan di kirim dari Url 
$nim = $_GET['nim'];
//menghapus data dari database 
mysqli_query($kon, "DELETE FROM anggota WHERE nim = '$nim' ");
//mengalihkan halam kembali ke index.php 
header("location:view_data.php");
?>
