<?php
// Sesuaikan informasi berikut dengan informasi database Anda
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

// Menangkap data dari formulir
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'] )) {
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];
    $input_email = $_POST['email'];

    // Menyimpan data ke database
    $sql = "INSERT INTO users (username, password, email) VALUES ('$input_username', '$input_password', '$input_email')";

    if ($conn->query($sql) === TRUE) {
        // Pendaftaran berhasil, arahkan ke halaman login.html
        echo "<script>alert('Pendaftaran berhasil. Silakan login.'); window.location.href = 'login.html';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Menutup koneksi
$conn->close();
?>
