<?php
require 'function.php';

if( isset($_POST["register"]) ) {

    if( registrasi($_POST) > 0 ) {
        echo "<script>
        
                alert('user baru berhasil ditambahkan!');
        
        </script>";
    } else {
        echo mysqli_error($conn);
    }
}


?>
<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Registrasi</title>
        <link rel="stylesheet" href="styles/style.css">
    </head>

    <body>
            <div class="container">
                <div class="box form-box">
                    <header>Registrasi</header>
                    <form action="" method="post">
                        <div class="field input">
                            <label for="username">Username :</label>
                            <input type="text" name="username" id="username">
                        </div>  
                        <div class="field input">
                            <label for="password">password :</label>
                            <input type="password" name="password" id="password">
                        </div>
                        <div class="field input">
                            <label for="password2">konfirmasi password :</label>
                            <input type="password" name="password2" id="password2">
                        </div>
                        <div class="field">
                            <button type="submit" class="btn" name="register">Register</button>
                        </div>
                        <div class="links">
                            Already have an account? <a href="login.php">Log In</a>
                        </div>
                    </form>
                </div>
            </div>
        

    </body>
</html>