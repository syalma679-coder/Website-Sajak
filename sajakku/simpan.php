<?php
include 'koneksi.php';

$judul = $_POST['judul'];
$isi = $_POST['isi'];

mysqli_query($conn,
"INSERT INTO sajak(judul, isi)
VALUES('$judul','$isi')");

header("Location:index.php");
?>