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
    <title>Edit</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h1>✏️ Edit Sajak</h1>

<form action="update.php" method="POST">

<input type="hidden"
name="id"
value="<?= $d['id']; ?>">

<input type="text"
name="judul"
value="<?= $d['judul']; ?>"
required>

<textarea
name="isi"
rows="10"
required><?= $d['isi']; ?></textarea>

<button type="submit">
Update
</button>

</form>

</div>

</body>
</html>