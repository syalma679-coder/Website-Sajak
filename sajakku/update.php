<?php
include 'koneksi.php';

$id = $_POST['id'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];

mysqli_query($conn,
"UPDATE sajak
SET judul='$judul',
isi='$isi'
WHERE id='$id'");

header("Location:index.php");
?>