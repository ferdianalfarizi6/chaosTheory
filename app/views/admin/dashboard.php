<?php
// ================================
// LOAD DATABASE (PDO)
// ================================
require_once '../../config/database.php';

// ================================
// LOAD MODEL
// ================================
require_once '../../models/Pengajuan.php';

// ================================
// AMBIL DATA PENGAJUAN
// ================================
$pengajuan = new Pengajuan($pdo);
$data = $pengajuan->all();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin | Universitas Teknokrat Indonesia</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../../public/assets/css/style.css">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css">
</head>
<body class="bg-light">

    <!-- ===== NAVBAR ===== -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <!-- LEFT: Identity -->
            <a class="navbar-brand d-flex align-items-center gap-3" href="#">
                <img src="../../../public/assets/img/UNIVERSITASTEKNOKRAT.PNG" alt="Logo" height="42">
                <div class="d-flex flex-column lh-1">
                    <span class="fw-bold" style="font-size: 1.1rem; letter-spacing: 0.5px;">UNIVERSITAS TEKNOKRAT INDONESIA</span>
                    <span class="navbar-text-small text-white opacity-75" style="font-size: 0.85rem; margin-top: 2px;">Sistem Informasi Bantuan Sosial</span>
                </div>
            </a>

            <!-- RIGHT: User Profile -->
            <div class="ms-auto d-flex align-items-center text-white">
                <div class="text-end me-3 d-none d-md-block lh-sm">
                    <div class="fw-bold" style="font-size: 0.9rem;">Administrator</div>
                    <div style="font-size: 0.75rem; opacity: 0.8;">Humas / Keuangan</div>
                </div>
                <div class="bg-white text-primary rounded-circle d-flex align-items-center justify-content-center shadow-sm" style="width: 36px; height: 36px;">
                    <i class="bi bi-person-fill"></i>
                </div>
            </div>
        </div>
    </nav>

    <!-- ===== CONTENT ===== -->
    <div class="container mb-5">
        
        <!-- Header & Nav -->
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4 gap-3">
            <div class="d-flex align-items-center gap-3">
                <a href="../../../public/index.php" class="btn btn-outline-secondary rounded-pill d-flex align-items-center gap-2 px-3 py-2" title="Kembali ke Home">
                    <i class="bi bi-arrow-left"></i> <span>Kembali</span>
                </a>
                <div>
                    <h2 class="mb-0 fw-bold text-primary">Dashboard Overview</h2>
                    <p class="text-secondary mb-0 small">Monitoring real-time data pengajuan bantuan.</p>
                </div>
            </div>
            
            <div>
                <span class="badge bg-white text-primary border px-3 py-2 rounded-pill shadow-sm">
                    <i class="bi bi-calendar-check me-2"></i> <?= date('l, d M Y') ?>
                </span>
            </div>
        </div>

        <!-- Stats Row -->
        <div class="row g-3 mb-4">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 p-3">
                    <div class="d-flex align-items-center">
                        <div class="stats-icon bg-soft text-primary">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <div>
                            <h3 class="mb-0 fw-bold"><?= count($data) ?></h3>
                            <div class="text-muted small">Total Pemohon</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 p-3">
                    <div class="d-flex align-items-center">
                        <div class="stats-icon bg-soft text-success">
                            <i class="bi bi-cash-stack"></i>
                        </div>
                        <div>
                            <h3 class="mb-0 fw-bold text-success">
                                Rp <?= number_format(array_sum(array_column($data, 'pendapatan')) / 1000000, 1) ?>M
                            </h3>
                            <div class="text-muted small">Estimasi Penyaluran</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 p-3">
                    <div class="d-flex align-items-center">
                        <div class="stats-icon bg-soft text-info">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <div>
                            <h3 class="mb-0 fw-bold text-info">100%</h3>
                            <div class="text-muted small">Keamanan Enkripsi</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table Section -->
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white py-3 border-bottom d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0 fw-bold text-primary">Data Pengajuan Masuk</h5>
                <div class="input-group" style="width: 250px;">
                    <span class="input-group-text bg-white border-end-0"><i class="bi bi-search text-muted"></i></span>
                    <input type="text" id="searchInput" class="form-control border-start-0 ps-0" placeholder="Cari data...">
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table id="dataTable" class="table table-hover align-middle mb-0">
                        <thead class="bg-light">
                            <tr>
                                <th class="px-4 py-3 text-secondary small text-uppercase">#</th>
                                <th class="px-4 py-3 text-secondary small text-uppercase" width="25%">Pemohon</th>
                                <th class="px-4 py-3 text-secondary small text-uppercase">Ekonomi</th>
                                <th class="px-4 py-3 text-secondary small text-uppercase">Lokasi</th>
                                <th class="px-4 py-3 text-secondary small text-uppercase text-end">Aksi Validasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($data)) : ?>
                                <?php $no = 1; foreach ($data as $d) : ?>
                                <tr>
                                    <td class="px-4"><?= $no++ ?></td>
                                    <td class="px-4">
                                        <div class="fw-bold text-dark"><?= htmlspecialchars($d['nama']) ?></div>
                                        <div class="small text-muted"><i class="bi bi-card-heading me-1"></i> <?= substr($d['nik'] ?? '0000', 0, 6) ?>******</div>
                                    </td>
                                    <td class="px-4">
                                        <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25 rounded-pill">
                                            Rp <?= number_format($d['pendapatan']) ?>
                                        </span>
                                    </td>
                                    <td class="px-4">
                                        <div class="text-dark small"><?= htmlspecialchars($d['kecamatan']) ?></div>
                                        <div class="text-secondary small" style="font-size: 0.75rem;"><?= htmlspecialchars($d['kelurahan']) ?></div>
                                    </td>
                                    <td class="px-4 text-end">
                                        <form action="decrypt.php" method="POST" class="d-flex justify-content-end gap-2">
                                            <input type="hidden" name="file" value="<?= $d['ktp_encrypted'] ?>">
                                            <input type="number" name="key" placeholder="Key" required class="form-control form-control-sm text-center" style="width: 70px;">
                                            <button type="submit" class="btn btn-primary btn-sm rounded-pill px-3">
                                                <i class="bi bi-unlock-fill me-1"></i> Buka Data
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="5" class="py-5 text-center text-muted">
                                        <i class="bi bi-folder-x display-6 d-block mb-3 opacity-25"></i>
                                        Belum ada data pengajuan yang masuk.
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-white text-muted small text-center py-3">
                Menampilkan <?= count($data) ?> data terbaru
            </div>
        </div>
        
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Navbar Auto Hide -->
    <script src="../../../public/assets/js/navbar.js"></script>
    
    <!-- Simple Search Script -->
    <script>
        document.getElementById('searchInput').addEventListener('keyup', function() {
            let filter = this.value.toLowerCase();
            let rows = document.querySelectorAll('#dataTable tbody tr');
            rows.forEach(row => {
                let text = row.innerText.toLowerCase();
                row.style.display = text.includes(filter) ? '' : 'none';
            });
        });
    </script>

</body>
</html>
