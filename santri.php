<?php
session_start();
error_reporting(0);
require_once("koneksi/koneksi.php");

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
        <div class="row">
        <div class="col-md-6">
    <table class="table table-hover">
      <tbody>
        <?php
        $uid = $_SESSION['uid'];
        $query = mysqli_query($koneksi,"SELECT * FROM user where id_user = '$uid'");
        while ($data = mysqli_fetch_array($query)) {
          $nama = $data['nama'];
          $kontak = $data['kontak'];
          $alamat = $data['alamat'];
        ?>
        <tr>
            <td><b>Nama</b></td>
            <td>: <?php echo $nama; ?> </td>
        </tr>
        <tr>
            <td><b>Kontak</b></td>
            <td>: <?php echo $kontak; ?></td>
        </tr>
        <tr>
            <td><b>Alamat</b></td>
            <td>: <?php echo $alamat ?></td>
        </tr>
        <tr>
            <td colspan="2">
              
              <a href="?act=edit&id=<?=$uid?>" class="btn btn-success">Edit</button>
              
            </td>
        </tr>
        <?php
        }
        ?>  
      </tbody>
  </table>
      </div>
      <div class="col-md-6">
<!-- Form Edit  -->
      <?php
      if ($_GET['act']) {
        $id = $_GET['id'];
        $query = mysqli_query($koneksi,"SELECT * FROM user where id_user = '$id'");
        while ($data = mysqli_fetch_array($query)) {
          $nama = $data['nama'];
          $kontak = $data['kontak'];
          $password = $data['password'];
          $alamat = $data['alamat'];
      ?>
      
      <form action="" method="POST" role="form">
        <legend>Form title</legend>
      
        <div class="form-group">
          <input type="hidden" name="id" value="<?=$uid?>">
          <label for="">Nama</label>
          <input type="text" class="form-control" id="" name="nama" value="<?=$nama?>">
          <label for="">Kontak</label>
          <input type="text" class="form-control" id="" name="kontak" value="<?=$kontak?>">
          <label for="">Password</label>
          <input type="password" class="form-control" id="" name="password" placeholder="Password">
          <label for="">Alamat</label>
          <input type="text" class="form-control" id="" name="alamat" value="<?=$alamat?>">
        </div>
      
        
      
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      
      <?php
        }
      }
      ?>
<!-- End Form Edit -->
    </div>
</div>    
</div>
          <br><br><br><br><br><br><br><br><br>
            <!-- <nav class="navbar navbar-inverse navbar-fixed-bottom text-center" role="navigation"> -->
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

<?php
//daftar ngaji
if (isset($_POST['nama'])) {
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $password = $_POST['password'];
  $kontak = $_POST['kontak'];
  $alamat = $_POST['alamat'];
    if (!empty($password)) {
      $query = "UPDATE user SET nama='$nama', kontak='$kontak', password='$password', alamat='$alamat' where id_user='$id' ";
      $sql = mysqli_query($koneksi, $query);
      header("Location: santri.php");
    }else{
      $query = "UPDATE user SET nama='$nama', kontak='$kontak', alamat='$alamat' where id_user='$id' ";
      $sql = mysqli_query($koneksi, $query);
      header("Location: santri.php");
    }
}    
?>