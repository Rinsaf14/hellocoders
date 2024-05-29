<!-- Digunakan sebagai halaman admin untuk menambah, menghapus dan mencari -->
<!-- untuk sekarang hanya koneksi dan melihat tampilannya -->
<?php

session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'function.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// Tombol cari ditekan
if ( isset($_POST["cari"]) ) {
    $mahasiswa = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Admin</title>

        <style>

            @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
            * {
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
            }

            button {
                height: 35px;
                background: aqua;
                border: 0;
                border-radius: 5px;
                border: 2px solid black;
                color: black;
                font-weight: 700;
                font-size: 15px;
                cursor: pointer;
                transition: all 0.3s;
                margin-top: 10px;
                padding: 0px 10px;
            }

            button a {
                text-decoration: none;
                color: black;
            }

            .loader {
                width: 30px; 
                position: absolute;
                top: 138px;
                z-index: -1;
                left: 270px;
                display: none;

            }

            .judul a {
                text-decoration: none;
            }

        </style>

        <script src="js/jQuery.js" ></script>
        <script src="js/script.js"></script>
        
    </head>
    <body>
    <div class="logout">
        <button>
            <a href="logout.php">Logout</a>
        </button>
    </div>
    <div class="judul">
        <h1>Daftar Mahasiswa Hello Coders Tahun 2024</h1>
        <button>
            <a href="tamba.php">Tambah data Mahasiswa</a>
        </button>
    </div>
    <br>

        <form action="" method="post">
            
        <input type="text" name="keyword" size="30" autofocus="" placeholder="masukkan keyword pencarian.." autocomplete="off" id="keyword">
            <button type="submit" name="cari" id="tombol-cari">Cari!</button>

            <img src="img/loading.gif" class="loader">
        </form>

        <br>

        <div id="container">

        <table border="1" cellpadding="10" cellspacing="0">
       

            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach( $mahasiswa as $row) : ?>
        <tr>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
                <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
            </td>
            <td><img src="img/<?= $row["gambar"]; ?>" width="50" ></td>
            <td><?= $row["nim"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>

    </table>

    </div>
    

    <!-- Download dan simpan jQueri 3.7.1 -->




    </body>
</html>

<!-- Agar prosesnya lebih modular atau rapi maka bisa dilihat cara kedua belajar PHP untuk pemula pada menit ke 43 -->