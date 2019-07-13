<?php
session_start();

include '../koneksi/koneksi.php';

$kontak = $_POST['kontak'];
$password = $_POST['password'];

$query = "SELECT * FROM user WHERE kontak = '$kontak' AND password='$password'";
$data = mysqli_query($koneksi, $query);
// var_dump($query);
$cek  = mysqli_num_rows($data);
while ($value = mysqli_fetch_assoc($data)) {
    
    if ($cek === 1) {
        $_SESSION['kontak'] = $kontak;
        $_SESSION['uid'] = $value['id_user'];
        $_SESSION['nama'] = $value['nama'];
         header("Location: ../home.php");
         exit();
    }else{
        header("Location: ../index.php");
    
    }
}

?>