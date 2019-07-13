<?
require_once("../koneksi/koneksi.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ngaji Ngalong</title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form  action="proses_daftar.php" method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Daftar Akun</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="nama" id="nama" placeholder="Nama Lengkap"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="kontak" id="kontak" placeholder="Kontak"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Password"/>
                            <!-- <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span> -->
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password2" id="password2" placeholder="Konfirmasi Password"/>
                            <!-- <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span> -->
                        </div>
                        <!-- <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div> -->
                        <div class="form-group">
                            <input type="text" class="form-input" name="alamat" id="alamat" placeholder="Alamat"/>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Daftar"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Sudah Punya Akun ? <a href="masuk.php" class="loginhere-link">Masuk</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>