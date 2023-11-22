<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mahasiswa";
// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if (isset($_POST['email'])) {
    $email = $_POST['email'];

    // Lakukan validasi email di sini

    // Cari email dalam basis data
    $result = mysqli_query($conn, "SELECT * FROM students WHERE email='$email'");

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $password = $row['password'];

        // Tampilkan password lama
        echo "Password Anda: " . $password;
    } else {
        echo "Alamat email tidak terdaftar.";
    }
}

// Menutup koneksi
$conn->close();
?>
