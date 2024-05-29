<?php

session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'function.php';

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {

    // cek apakah data berhasil ditambahkan atau tidak
    if( tambah($_POST) > 0 ) {
        echo "
        <script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'index.php'
        </script>
        ";
    } else {
        echo "
        <script>
        alert('data gagal ditambahkan!');
        document.location.href = 'index.php'
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tambah data mahasiswa</title>
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body>
        <div class="container">
            <div class="box form-box">
                <header>Tambah data mahasiswa</header>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="field input"> 
                        <label for="nama">Nama : </label>
                        <input type="text" name="nama" id="nama">
                    </div>
                    <div class="field input"> 
                        <label for="nim">NIM : </label>
                        <input type="text" name="nim" id="" required>
                    </div>
                    <div class="field input"> 
                        <label for="email">Email : </label>
                        <input type="text" name="email" id="email">
                    </div>
                    <div class="field input"> 
                        <label for="jurusan">Jurusan : </label>
                        <input type="text" name="jurusan" id="jurusan">
                    </div>
                    <div class="field input"> 
                        <label for="gambar">Gambar : </label>
                        <input type="file" name="gambar" id="gambar">
                    </div>
                    <div class="field">
                        <button type="submit" class="btn" name="submit">Tambah Data!</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>