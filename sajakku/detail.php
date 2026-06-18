<?php
include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($conn,
"SELECT * FROM sajak WHERE id='$id'");

$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title><?= $d['judul']; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<div class="card">

<h1><?= $d['judul']; ?></h1>

<p style="white-space: pre-line;">
<?= $d['isi']; ?>
</p>

<a href="index.php" class="tombol">
← Kembali
</a>

</div>

</div>

</body>
</html>