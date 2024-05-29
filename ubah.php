<?php

session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'function.php';

// Ambil data di URL

$id = $_GET["id"];
// query data mahasiswa berdasarkan idnya
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {

    // cek apakah data berhasil diubah atau tidak
    if( ubah($_POST) > 0 ) {
        echo "
        <script>
            alert('data berhasil diubah!');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('data gagal diubah!');
        document.location.href = 'index.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Ubah data mahasiswa</title>
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body>
        <div class="container">
            <div class="box form-box">
                <h1>Ubah data mahasiswa</h1>
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $mhs["id"] ?>">
                    <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"] ?>">

                    <div class="field input">
                        <label for="nama">Nama : </label>
                        <input type="text" name="nama" id="nama" value="<?= $mhs["nama"]; ?>">
                    </div>
                    <div class="field input">
                        <label for="nim">NIM : </label>
                        <input type="text" name="nim" id="" required value="<?= $mhs["nim"]; ?>">
                    </div>
                    <div class="field input">
                        <label for="email">Email : </label>
                        <input type="text" name="email" id="email" value="<?= $mhs["email"]; ?>">
                    </div>
                    <div class="field input">
                        <label for="jurusan">Jurusan : </label>
                        <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"]; ?>">
                    </div>
                    <div class="field input">
                        <label for="gambar">Gambar : </label> <br>
                        <img src="img/<?= $mhs['gambar'];?>" alt="" width="40"> <br>
                        <input type="file" name="gambar" id="gambar">
                    </div>
                    <div class="field">
                          <button type="submit" class="btn" name="submit">Ubah Data!</button>
                    </div>
                </form>
            </div>
        </div>    
    </body>
</html>