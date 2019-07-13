<?php
session_start();
require_once("koneksi/koneksi.php");


$uid = $_SESSION['uid'];

if (empty($_SESSION['kontak'])) {
  header("Location: register/masuk.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="gambar/gambar.png">
    <title>Ngaji Ngalong</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
      footer{
        padding-top: 13px;
        color: aliceblue;
      }
      table{
        margin-top: 50px;
      }
    </style>
    <!-- <style type="text/css">
      .navbar-toggle{
        background-color: #66c2ff;
        font-size: 18px;
      } -->
</head>
<body>
 
 <nav class="navbar navbar-default" role="navigation">
   <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
   <button type="button" class="navbar-toggle nav-but" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
   </button>
   <a class="navbar-brand" href="home.php"><b>Ngaji Ngalong</b></a>
   </div>
   
 
   <!-- Collect the nav links, forms, and other content for toggling -->
   <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav bs-example-navbar-collapse-1">
      <li><a href="ngaji.php">Ngaji</a></li>
    </ul>
    <ul class="nav navbar-nav bs-example-navbar-collapse-1">
      <li><a href="santri.php">Santri</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right bs-example-navbar-collapse-1">
      <li><a href="register/logout.php"><span class="align btn btn-danger glyphicon glyphicon-log-out"></span>Logout</a></li>
    </ul>
   </div><!-- /.navbar-collapse -->
 </nav>

    <!-- /.container -->
    <div class="container">      
        <h1 class="text-center">Daftar Ngaji</h1>
        <!--Menampilkan kartu pendaftaran-->
        <?php
        $query = mysqli_query($koneksi, "SELECT ngaji.ngaji, ngaji.id_ngaji, pengajar.nama, pengajar.alamat, ngaji.waktu FROM ngaji,pengajar WHERE ngaji.id_pengajar=pengajar.id_pengajar");
        while($data = mysqli_fetch_array($query)){
        ?>
        <div class="col-sm-3 col-md-3">
          <ul class="list-group">
            <li class=" list-group-item">
              <img src="gambar/masjid.jpg" class="img-responsive" alt="Image">
            </li>
            <li class="list-group-item"><?=$data['ngaji']?></li>
            <li class="list-group-item"><?=$data['nama']?></li>
            <li class="list-group-item"><?=$data['alamat']." | ".$data['waktu']?></li>
            <li class="list-group-item text-center">
              <a href="daftar_ngaji.php?nid=<?=$data['id_ngaji']?>&uid=<?=$uid?>" class="btn btn-primary">Daftar</a>
            </li>
          </ul>
        </div>
        <?php
        }
        ?>
        <!--End Menampilkan kartu pendaftaran-->
        <br>
        
    </div>
    <br><br><br><br><br><br><br><br><br><br>
      <nav class="navbar navbar-inverse navbar-fixed-bottom text-center" role="navigation">

        <!-- ini footer -->
        <footer>
          <p>Copyright &copy; NgajiNgalong</p>
        </footer>
      </nav>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>