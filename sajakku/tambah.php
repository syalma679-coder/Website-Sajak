<!DOCTYPE html>
<html>
<head>
    <title>Tambah Sajak</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h1>🖋️ Tambah Sajak</h1>

<form action="simpan.php" method="POST">

    <input type="text"
    name="judul"
    placeholder="Judul sajak"
    required>

    <textarea
    name="isi"
    rows="10"
    placeholder="Tuliskan sajakmu..."
    required></textarea>

    <button type="submit">
        Simpan
    </button>

</form>

</div>

</body>
</html>