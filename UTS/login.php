<?php
// Memulai sesi
session_start();

// Jika sudah login, redirect ke halaman Home
if (isset($_SESSION['username'])) {
    header('Location: home.php');
    exit();
}

// Variabel pesan error
$error_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil input dari form
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    
    // Validasi form
    if (empty($username) || empty($password)) {
        $error_message = "Harus terisi";
    } elseif (strlen($password) > 6) {
        $error_message = "Password maksimal 6 karakter";
    } elseif (!preg_match('/[A-Z]/', $password) || !preg_match('/[a-z]/', $password)) {
        $error_message = "Password harus terdiri dari huruf besar dan kecil";
    } else {
        // Jika validasi berhasil
        $_SESSION['username'] = $username;
        header("Location: home.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Laundry Barokah</title>
    <link rel="stylesheet" href="style.css">
    <script src="validation.js" defer></script>
</head>
<body>
    <div class="login-container">
        <h2>Laundry Barokah</h2>
        <form method="POST" action="login.php" id="loginForm">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Masukkan username"><br>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Masukkan password"><br>

            <button type="submit">Login</button>
            <?php if ($error_message) echo "<p class='error'>$error_message</p>"; ?>
        </form>
        
    </div>
</body>
</html>



