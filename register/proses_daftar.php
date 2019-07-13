<?php
include_once"../koneksi/koneksi.php";

//dapat data dari form daftar di index.php

$nama = $_POST['nama'];
$kontak = $_POST['kontak'];
$password = $_POST['password'];
$alamat = $_POST['alamat'];
$query = "INSERT INTO user (nama, kontak, password, alamat) 
            VALUES('$nama', '$kontak', '$password','$alamat')";
//var_dump($nama);
$exec = mysqli_query($koneksi, $query);

if($exec){
    header("Location:../index.php");
}else{
    echo"Gagal Menambah user";
}

?>
