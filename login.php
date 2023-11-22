<?php
// Sesuaikan informasi berikut dengan informasi database Anda
session_start();
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
if (isset($_POST['username'], $_POST['password'], $_POST['email'])) {
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];
    $input_email = $_POST['email'];

    // Mencegah serangan SQL Injection
    $input_username = $conn->real_escape_string($input_username);

    // Membuat prepared statement untuk memeriksa username
    $stmt = $conn->prepare("SELECT * FROM users WHERE username=?");
    $stmt->bind_param("s", $input_username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Mengecek apakah username cocok
    $sql = "SELECT * FROM users WHERE username='$input_username'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Memeriksa apakah password cocok
        if ($input_password === $row['password']) {
            // Jika username dan password cocok, atur variabel sesi dan redirect ke halaman indexx.php
            $_SESSION['loggedin'] = true;
            $_SESSION['admin_name'] = $row['username'];// Mengasumsikan nama kolomnya adalah 'nama_admin'
            $_SESSION['admin_email'] = $row['email']; 
            header("Location: indexx.php");
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
