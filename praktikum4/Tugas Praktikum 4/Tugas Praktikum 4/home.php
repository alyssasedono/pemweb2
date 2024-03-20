<?php

// Mulai sesi
session_start();

// Periksa apakah pengguna sudah login atau belum
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Jika belum, alihkan kembali ke halaman login
    header("Location: login.php");
    exit;
}

// Jika sudah login, tampilkan halaman home
echo "Selamat datang, " . $_SESSION['username'] . "! Ini adalah halaman utama.";
?>