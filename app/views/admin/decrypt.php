<?php
require_once '../../helpers/ChaosCrypto.php';

// AMBIL INPUT
$key  = intval($_POST['key']);
$file = basename($_POST['file']); // keamanan

// PATH ABSOLUT (WAJIB)
$path = __DIR__ . "/../../../public/uploads/encrypted/" . $file;

if (!file_exists($path)) {
    die("File terenkripsi tidak ditemukan");
}

// BACA FILE (INI BASE64 STRING)
$encryptedData = file_get_contents($path);

// DEKRIPSI → HASILNYA BINARY IMAGE
$decryptedImage = ChaosCrypto::decrypt($encryptedData, $key);

// HEADER IMAGE (WAJIB)
header("Content-Type: image/jpeg");
header("Content-Length: " . strlen($decryptedImage));

// OUTPUT TANPA APA PUN
echo $decryptedImage;
exit;
