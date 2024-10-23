<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home - Barokah Laundry</title>
    <link rel="stylesheet" href="styleHome.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="slider.js"></script>
</head>
<body>
    <div class="container">
        <header>
            <h2>Barokah Laundry</h2>
            <nav>
                <a href="home.php">Home</a>
                <a href="cek_harga.php">Cek Harga</a>
                <a href="logout.php">Logout</a>
            </nav>
        </header>

        <section class="banner">
                <img src="img/banner1.png" alt="Banner 1">
        </section>

        <section class="company-profile">
            <h3>Profil laundry</h3>
            <p>Laundry kami berdiri sejak 2020 dan melayani berbagai jenis layanan laundry seperti cuci kering, 
                cuci setrika, dan setrika pakaian. Kami berkomitmen untuk memberikan layanan terbaik dengan harga terjangkau.</p>
            <p><strong>Alamat:</strong> Jalan Kebersihan No. 10, Jakarta</p>
            <p><strong>Kontak:</strong> 081234567890</p>
            <p><strong>Jam Operasional:</strong> 08:00 - 20:00 (Setiap Hari)</p>
        </section>

    </div>
</body>
</html>
