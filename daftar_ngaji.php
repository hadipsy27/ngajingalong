<?php
require_once("koneksi/koneksi.php");
error_reporting(0);
//daftar ngaji
if ($_GET['nid']) {
  $uid = $_GET['uid'];
  $nid = $_GET['nid'];
  $q_ngaji = "select id_ngaji from daftar where id_ngaji='$nid' and id_user='$uid'";
  $sql_ngaji = mysqli_query($koneksi,$q_ngaji);
  $ana = mysqli_num_rows($sql_ngaji);
//   var_dump($sql_ngaji);
//   var_dump($ana);

  if ($ana != 1) {
      $query = "INSERT INTO daftar (id_user, id_ngaji) values ('$uid','$nid')";
      $sql = mysqli_query($koneksi, $query);
        header("Location: ngaji.php?uid=".$uid);
  }else{
    echo"<script>
    alert('Wes Daftar');
    </script>";
      echo'<meta http-equiv="refresh" content="1;url=home.php">';
      
  }
}

?>