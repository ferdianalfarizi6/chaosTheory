<?php
// =======================================
// LOAD DEPENDENCY
// =======================================
require_once '../config/database.php';
require_once '../helpers/ChaosCrypto.php';
require_once '../models/Pengajuan.php';

// =======================================
// BUAT MODEL
// =======================================
$pengajuan = new Pengajuan($pdo);

// =======================================
// AMBIL DATA FORM
// =======================================
$nama = $_POST['nama'];
$key  = strlen($nama); // key chaos dari panjang nama

// =======================================
// ENKRIPSI NIK
// =======================================
$nikEncrypted = ChaosCrypto::encrypt($_POST['nik'], $key);

// =======================================
// ENKRIPSI FILE KTP
// =======================================
$image = file_get_contents($_FILES['ktp']['tmp_name']);
$ktpEncrypted = ChaosCrypto::encrypt($image, $key);
$filename = uniqid() . ".enc";

// Folder upload terenkripsi
$uploadPath = __DIR__ . "/../../public/uploads/encrypted/";
if (!is_dir($uploadPath)) {
    mkdir($uploadPath, 0777, true);
}

// Simpan file terenkripsi
file_put_contents($uploadPath . $filename, $ktpEncrypted);

// =======================================
// SIMPAN KE DATABASE
// =======================================
$result = $pengajuan->insert([
    $nama,
    $nikEncrypted,
    $_POST['pendapatan'],
    $_POST['provinsi'],
    $_POST['kota'],
    $_POST['kecamatan'],
    $_POST['kelurahan'],
    $_POST['rt'],
    $_POST['rw'],
    $filename
]);

// =======================================
// REDIRECT JIKA BERHASIL
// =======================================
if ($result) {
    header("Location: ../views/pengajuan/success.php");
    exit;
} else {
    echo "Pengajuan gagal!";
}
