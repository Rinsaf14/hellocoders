<!-- REGISTRASI -->
<!-- Login Sistem -->
<!-- 1. Registrasi -->
<!-- 2. Login -->
<!-- 3. Session -->
<!-- 4. Cookie -->

<!-- Namun sebelumnya membuat: -->
<!-- 1. Tabel 'user' untuk menampung data dari user misalnya username, pasword atau email  -->
<!-- 2. Enkripsi password (Ketika ingin membuat sebuah sistem login username dan password user pastikan sudah di enkripsi) -->
<?php

session_start();
require 'function.php';

// cek cookie
if( isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    // ambil username berdasarkan idnya
    $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if( $key === hash('sha256', $row['username']) ) {
        $_SESSION['login'] = true;
    }

}

if( isset($_SESSION["login"]) ) {
    header("Location: index.php");
    exit;
}

if( isset($_POST["login"]) ) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    if( mysqli_num_rows($result) === 1 ) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if( password_verify($password, $row["password"]) ) {
            // set session 
            $_SESSION["login"] = true;

            // cek remember me
            if( isset($_POST['remember']) ) {
                // buat cookie

                setcookie('id', $row['id'], time()+60);
                setcookie('key', hash('sha256', $row['username']), time()+60);
            }

            header("Location: index.php");
            exit;
        }
    }

    $error = true;
}

?>



<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body>
        <div class="container">
            <div class="box form-box">
            <header>Login</header>

            <?php if( isset($error) ) : ?>
                <p style="color: red; font-style: italic;"></p> username / password salah </p>
                <?php endif; ?>

            <form action="" method="post">
                <div class="field input">  
                        <label for="username">Username :</label>
                        <input type="text" name="username" id="username">
                </div>
                <div class="field input">
                        <label for="password">Password :</label>
                        <input type="password" name="password" id="password">
                </div>
                <div class="field input checkbox">
                   <input type="checkbox" name="remember" id="remember">
                    <label for="remember">Remember me</label>
                </div>
                <div class="field">
                    <button type="submit" class="btn" name="login">Login</button>
                </div>
                <div class="links">
                    Don't have account? <a href="registrasi.php">Sign Up Now</a>
                </div>
                
            </form>
            </div>
     </div>
    </body>
</html>