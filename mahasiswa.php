<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="nav.css">
   <style>
    .no-underline {
  text-decoration: none;
}
   </style>
</head>
<body>
<nav>
        <div class="logo">
            <a href="https://www.uncen.ac.id/" target="_blank">
                <img src="uncen.png" alt="my-logo" />
            </a>
            <div class="brand">UNIVERSITAS CENDERAWASIH</div>
        </div>
        <ul>
            <li>
                <a href="mahasiswa.php">Home</a>
            </li>
            <li>
                <a href="https://drive.google.com/file/d/1MRq2ctlzR18Zn10VGSBY1Cm9CPkoRf9p/view?usp=drive_link"
                    target="_blank">Source Code</a>
            </li>
            <li><div class="dropdown">
                <a href="#">Contact</a>
                <div class="dropdown-content">
                <a href="https://www.instagram.com/kaka_rhyo/" target="_blank"><p>Instagram</a></p>
                <a href="https://www.facebook.com/mario.irianto.90" target="_blank"><p>facebook</a></p>
                <a href="https://wa.me/621344823021" target="_blank"><p>WhatsApp</a></p>
                </div>
            </li>
            <li>
                <a href="loginstudent.html">Log Out</a>
            </li>
        </ul>
    </nav><br>
    <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="search">&nbsp;&nbsp;Cari Nama Mahasiswa:</label><br>
        <input type="text" id="search" name="search">
        <input type="submit" value="Cari"> 

    </form>

    <?php
    include "koneksi.php";
    $sql = "SELECT * FROM anggota";

    if (isset($_GET['search'])) {
        $search_term = $_GET['search'];// baris ini mengambil nilai dari parameter 
                                        // pencarian dan menyimpannya dalam variabel $search_term.
        $sql .= " WHERE nama LIKE '%" . $search_term . "%'"; 
    }

    $sql .= " ORDER BY nim ASC";
    
    $hasil = mysqli_query($kon, $sql);
    $no = 0;
    if ($hasil) {
        echo "<table>";
        echo "<tr>
        <th>No</th>
        <th>Nama</th>
        <th>nim</th>
        </tr>";
        while ($data = mysqli_fetch_array($hasil)) {
            $no++;
            echo "<tr>";
            echo "<td class='centered'>" . $no . "</td>";
            echo "<td><a class='no-underline' href='detail_mahasiswa.php?nim=" . $data['nim'] . "'>" . $data['nama'] . "</a></td>";
            //echo "<td><a href='detail_mahasiswa.php?nim=" . $data['nim'] . "'>Detail</a></td>";
            echo "<td>" . $data['nim'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Data tidak ditemukan.";
    }
    ?>
            <?php
        if (isset($_GET['search'])) {
            echo '<input type="button" class="button" onclick="window.location.href=\'' . $_SERVER['PHP_SELF'] . '\'" value="Kembali">';
        }
        ?>
</body>
</html>
