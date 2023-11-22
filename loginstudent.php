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

// Memeriksa apakah data yang dikirimkan dari formulir login telah diterima
if (isset($_POST['username2'], $_POST['password2'], $_POST['email2'])) {
    $input_username = $_POST['username2'];
    $input_password = $_POST['password2'];
    $input_email = $_POST['email2'];
    // Mencegah serangan SQL Injection
    $input_username = $conn->real_escape_string($input_username);

    // Mengecek apakah username cocok
    $sql = "SELECT * FROM students WHERE username2='$input_username'";
    $result = $conn->query($sql);
    session_start();
    $_SESSION['loggedin'] = true;

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Memeriksa apakah password cocok
        if ($input_password === $row['password']) { // Perubahan dilakukan di sini
            // Jika username dan password cocok, redirect ke halaman index.php
            header("Location: mahasiswa.php");
            exit();
        } else {
            echo "<script>alert('Password salah');</script>";
        }
    } else {
        echo "<script>alert('Username tidak ditemukan');</script>";
    }
    
}

// Menutup koneksi
$conn->close();
?>
