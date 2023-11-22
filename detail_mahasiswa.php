<html>
    <head> 
        <link rel="stylesheet" href="detail_mahasiswa.css">
    </head>
<body>
    <div class="container">
    <div class="details">
<?php
// Pastikan koneksi ke database sudah tersedia
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mahasiswa";

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];

    // Query untuk mendapatkan detail mahasiswa berdasarkan NIM
    $query = "SELECT * FROM anggota WHERE nim = '$nim'";
    $result = $conn->query($query);
    $mahasiswa = $result->fetch_assoc();

    if ($mahasiswa) {
        // Tampilkan detail mahasiswa
        echo "Nama Mahasiswa &nbsp;: " . $mahasiswa['nama'] . "<br>"."<br>";
        echo "NIM Mahasiswa &nbsp;&nbsp;&nbsp;&nbsp;: " . $mahasiswa['nim'] . "<br>"."<br>";
        echo "Jenis Kelamin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: " . $mahasiswa['jenis_kelamin'] . "<br>"."<br>";
        echo "Tanggal lahir &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: " . $mahasiswa['tanggal_lahir'] . "<br>"."<br>";
        echo "Tempat lahir &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: " . $mahasiswa['tempat_lahir'] . "<br>"."<br>";
        // Tambahkan informasi lain yang perlu ditampilkan
    } else {
        echo "Data mahasiswa tidak ditemukan.";
    }
} else {
    echo "NIM mahasiswa tidak ditemukan.";
}

// Tutup koneksi
$conn->close();
?>
<a href="mahasiswa.php" class="btn">Kembali</a>
</div>        
    <div class="image-container">
    <img src="path_to_your_image.jpg" alt="Foto Mahasiswa">
    </div>
</div>
</body>
