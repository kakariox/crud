<?php

$host="localhost";
$user="root";//root
$password="";//""
$db="mahasiswa";

$kon = mysqli_connect($host,$user,$password,$db);
if (!$kon){
	  die("Koneksi gagal:".mysqli_connect_error());
}
?>