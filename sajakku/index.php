<?php
include 'koneksi.php';

$data = mysqli_query($conn, "SELECT * FROM sajak ORDER BY id DESC");
$total = mysqli_num_rows($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sajakku</title>

    <link rel="stylesheet" href="style.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Playfair+Display:wght@600&display=swap" rel="stylesheet">
</head>

<body>

<div class="container">

    <div class="hero">

        <h1>🌷 Sajakku 🌷</h1>

        <p class="tagline">
            Tempat semua kata yang tak sempat terucap.
        </p>

        <div class="stats">
            <div class="stat-box">
                <h2><?= $total ?></h2>
                <p>📚 Total Sajak</p>
            </div>

            <div class="stat-box">
                <h2>1</h2>
                <p>✍️ Penulis</p>
            </div>
        </div>

        <a href="tambah.php" class="tombol">
            + Tulis Sajak Pertama
        </a>

    </div>

    <div class="daftar">

    <?php if($total > 0){ ?>

        <?php while($d = mysqli_fetch_array($data)){ ?>

            <div class="card">

                <h2><?= $d['judul']; ?></h2>

                <p>
                    <?= substr($d['isi'],0,150); ?>...
                </p>

                <div class="aksi">

                    <a href="detail.php?id=<?= $d['id']; ?>">
                        📖 Baca
                    </a>

                    <a href="edit.php?id=<?= $d['id']; ?>">
                        ✏️ Edit
                    </a>

                    <a href="hapus.php?id=<?= $d['id']; ?>"
                    onclick="return confirm('Hapus sajak ini?')">

                        🗑️ Hapus
                    </a>

                </div>

            </div>

        <?php } ?>

    <?php } else { ?>

        <div class="empty">

            <h2>🌸 Belum ada sajak 🌸</h2>

            <p>
                Setiap hati menyimpan cerita,
                dan setiap cerita pantas untuk ditulis.
            </p>

            <p class="quote">
                "Tulislah, sebab mungkin ada perasaan
                yang hanya bisa pulang melalui kata."
            </p>

        </div>

    <?php } ?>

    </div>

</div>

</body>
</html>