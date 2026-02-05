<?php
// ==========================================
// KONFIGURASI DATABASE
// ==========================================
$host = "localhost";
$user = "root";
$pass = ""; // atau "" jika password kosong
$db   = "bansos";

try {
    // Membuat koneksi PDO
    $pdo = new PDO(
        "mysql:host=$host;dbname=$db;charset=utf8",
        $user,
        $pass
    );

    // Mode error PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Koneksi database gagal: " . $e->getMessage());
}
