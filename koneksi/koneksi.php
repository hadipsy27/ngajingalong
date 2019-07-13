<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "ngaji_ngalong";

//koneksi
$koneksi = mysqli_connect($server,$user,$pass,$db);

//mengecek koneksi
if(!$koneksi){
    die("Kenapa ada masalah? cerita aja sama aku: ".mysqli_connect_error());
}
echo"<script>
    window.alert(Koneksi Berhasi berhasi berhasil Horeee);
</script>";









?>