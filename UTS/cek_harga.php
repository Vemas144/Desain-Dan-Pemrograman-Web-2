<?php
// Mulai session
session_start();

// Jika tidak ada sesi username, redirect ke login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Fungsi untuk menghitung harga
function hitungHarga($berat, $jenis, $kecepatan, $diskon) {
    // Harga dasar per kilo
    $hargaPerKilo = 0;
    switch ($jenis) {
        case "Cuci Kering":
            $hargaPerKilo = 5000;
            break;
        case "Cuci Setrika":
            $hargaPerKilo = 8000;
            break;
        case "Setrika":
            $hargaPerKilo = 6000;
            break;
    }

    // Hitung total harga berdasarkan berat
    $totalHarga = $berat * $hargaPerKilo;

    // Tambah biaya jika kecepatan adalah Ekspress
    if ($kecepatan === "Ekspress") {
        $totalHarga += 2000 * $berat;
    }

    // Diskon berdasarkan tipe diskon
    if ($diskon === "Member") {
        $totalHarga -= $totalHarga * 0.10;
    } elseif ($diskon === "Kupon" && $berat >= 2) {
        $totalHarga -= 2 * $hargaPerKilo; // Gratis 2 kg
    }

    return $totalHarga;
}

// Proses jika form di-submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $berat = ceil($_POST['berat']);
    $jenis = $_POST['jenis'];
    $kecepatan = $_POST['kecepatan'];
    $diskon = $_POST['diskon'];

    $hargaTotal = hitungHarga($berat, $jenis, $kecepatan, $diskon);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cek Harga - Barokah Laundry</title>
    <link rel="stylesheet" href="style.css">
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

        <section class="cek-harga">
            <h3>Cek Harga</h3>
            <form method="POST" action="cek_harga.php">
                <label for="berat">Berat:</label>
                <input type="number" id="berat" name="berat" min="0" value="0" required><br>

                <label for="jenis">Jenis:</label>
                <select id="jenis" name="jenis">
                    <option value="Cuci Kering">Cuci Kering</option>
                    <option value="Cuci Setrika">Cuci Setrika</option>
                    <option value="Setrika">Setrika</option>
                </select><br>

                <label for="kecepatan">Kecepatan:</label>
                <select id="kecepatan" name="kecepatan">
                    <option value="Reguler">Reguler</option>
                    <option value="Ekspress">Ekspress</option>
                </select><br>

                <label for="diskon">Diskon:</label>
                <select id="diskon" name="diskon">
                    <option value="Non Member">Non Member</option>
                    <option value="Member">Member</option>
                    <option value="Kupon">Kupon</option>
                </select><br>

                <button type="submit">CHECK</button>
            </form>

            <?php if (isset($hargaTotal)): ?>
                <p>Total Harga: Rp <?= number_format($hargaTotal, 0, ',', '.'); ?></p>
            <?php endif; ?>
        </section>
    </div>
</body>
</html>
