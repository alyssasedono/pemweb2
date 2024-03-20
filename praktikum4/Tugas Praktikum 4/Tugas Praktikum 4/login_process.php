<?php
// Mulai sesi
session_start();

// Periksa apakah formulir dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Simpan data formulir yang dikirim
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Anda dapat mengganti ini dengan logika autentikasi yang sesuai, seperti memeriksa basis data
    $valid_email = 'nurulfajriah1611@gmail.com';
    $valid_password = 'Nurulfajriah123!';

    // Periksa apakah kredensial yang dikirim cocok dengan yang valid
    if ($username == $valid_email && $password == $valid_password) {
        // Autentikasi berhasil, atur variabel sesi
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        
        // Redirect ke halaman utama atau halaman lain yang sesuai
        header("Location: home.php");
        exit;
    } else {
        // Autentikasi gagal, kembali ke halaman login dengan pesan kesalahan
        $_SESSION['error'] = "email atau password salah.";
        header("Location: login.php");
        exit;
    }
} else {
    // Jika seseorang mencoba mengakses halaman ini secara langsung tanpa mengirimkan data login, alihkan kembali ke halaman login
    header("Location: login.php");
    exit;
}
?>