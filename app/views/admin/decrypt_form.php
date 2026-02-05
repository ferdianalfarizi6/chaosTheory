<?php
// View untuk memilih file dan memasukkan key dekripsi
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dekripsi Dokumen | Universitas Teknokrat Indonesia</title>
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../../public/assets/css/style.css">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css">
</head>
<body class="bg-light d-flex align-items-center justify-content-center min-vh-100 flex-column">

<!-- ===== NAVBAR ===== -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-3" href="dashboard.php">
            <img src="../../../public/assets/img/UNIVERSITASTEKNOKRAT.PNG" alt="Logo" height="42">
            <div class="d-flex flex-column lh-1">
                <span class="fw-bold" style="font-size: 1.1rem; letter-spacing: 0.5px;">UNIVERSITAS TEKNOKRAT INDONESIA</span>
                <span class="navbar-text-small text-white opacity-75" style="font-size: 0.85rem; margin-top: 2px;">Sistem Informasi Bantuan Sosial</span>
            </div>
        </a>
    </div>
</nav>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            
            <div class="card border-0 shadow-lg">
                <div class="card-header bg-primary text-white py-3 text-center">
                    <h5 class="mb-0"><i class="bi bi-unlock-fill me-2"></i>Dekripsi Dokumen</h5>
                </div>
                
                <div class="card-body p-4">
                    <p class="text-muted text-center small mb-4">
                        Masukkan kunci rahasia (Key) untuk membuka dokumen yang terenkripsi.
                    </p>

                    <form action="../../controllers/DecryptController.php" method="POST">
                        
                        <div class="mb-3">
                            <label class="form-label">Pilih File Terenkripsi</label>
                            <select name="file" class="form-select" required>
                                <option value="" selected disabled>-- Pilih Dokumen --</option>
                                <?php if (!empty($files)): ?>
                                    <?php foreach ($files as $file): ?>
                                        <option value="<?= $file ?>"><?= $file ?></option>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <option disabled>Tidak ada file ditemukan</option>
                                <?php endif; ?>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Kunci Keamanan (Key)</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light"><i class="bi bi-key"></i></span>
                                <input type="number" name="key" class="form-control" required placeholder="Masukkan PIN / Key...">
                            </div>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-file-earmark-lock me-2"></i> Dekripsi Sekarang
                            </button>
                            <a href="dashboard.php" class="btn btn-light text-secondary">
                                Batal
                            </a>
                        </div>

                    </form>
                </div>
            </div>
            
            <div class="text-center mt-4 text-muted small">
                &copy; 2026 Universitas Teknokrat Indonesia
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="../../../public/assets/js/navbar.js"></script>
</body>
</html>
