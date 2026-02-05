<?php
// ================================
// CONTROLLER DASHBOARD ADMIN
// ================================

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../models/pengajuan.php';

// Ambil semua data pengajuan
$pengajuan = new Pengajuan($pdo);
$data = $pengajuan->all();

// Kirim ke view
require_once __DIR__ . '/../views/admin/dashboard.php';
