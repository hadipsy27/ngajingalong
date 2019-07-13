<?php
require_once("koneksi/koneksi.php");
error_reporting(0);
//daftar ngaji
$id = $_GET['id'];


$query = "DELETE FROM daftar WHERE id_daftar = '$id'";
$sql = mysqli_query($koneksi, $query);
        header("Location: ngaji.php");
?>