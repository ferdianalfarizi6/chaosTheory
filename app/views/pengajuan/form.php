<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengajuan Bansos | Universitas Teknokrat Indonesia</title>

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
            <!-- LEFT -->
            <a class="navbar-brand d-flex align-items-center gap-3" href="../../../public/index.php">
                <img src="../../../public/assets/img/UNIVERSITASTEKNOKRAT.PNG" alt="Logo" height="42">
                <div class="d-flex flex-column lh-1">
                    <span class="fw-bold" style="font-size: 1.1rem; letter-spacing: 0.5px;">UNIVERSITAS TEKNOKRAT INDONESIA</span>
                    <span class="navbar-text-small text-white opacity-75" style="font-size: 0.85rem; margin-top: 2px;">Sistem Informasi Bantuan Sosial</span>
                </div>
            </a>
            
            <!-- RIGHT -->
            <div class="ms-auto">
                <a href="../../../public/index.php" class="btn btn-sm btn-outline-light rounded-pill px-3 d-flex align-items-center gap-2">
                    <i class="bi bi-arrow-left"></i> <span class="d-none d-sm-inline">Kembali</span>
                </a>
            </div>
        </div>
    </nav>

    <!-- ===== MAIN FORM ===== -->
    <div class="container pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-white py-4 border-bottom">
                        <h4 class="mb-1 text-primary">Formulir Pengajuan Bantuan</h4>
                        <p class="text-muted small mb-0">Lengkapi data diri Anda dengan benar dan valid.</p>
                    </div>
                    
                    <div class="card-body p-4">
                        <form action="../../controllers/PengajuanController.php" method="POST" enctype="multipart/form-data">
                            
                            <!-- SECTION 1: DATA DIRI -->
                            <h6 class="text-uppercase text-secondary fw-bold mb-3 small"><i class="bi bi-person-lines-fill me-2"></i>Data Identitas</h6>
                            <div class="row g-3 mb-4">
                                <div class="col-12">
                                    <label class="form-label">Nama Lengkap (Sesuai KTP)</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Masukkan nama lengkap..." required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">NIK</label>
                                    <input type="number" name="nik" class="form-control" placeholder="16 digit NIK" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Pendapatan Bulanan</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light">Rp</span>
                                        <input type="number" name="pendapatan" class="form-control" placeholder="0" required>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- SECTION 2: ALAMAT -->
                            <hr class="border-light my-4">
                            <h6 class="text-uppercase text-secondary fw-bold mb-3 small"><i class="bi bi-geo-alt-fill me-2"></i>Alamat Domisili</h6>
                            <div class="row g-3 mb-4">
                                <div class="col-md-6">
                                    <label class="form-label">Provinsi</label>
                                    <input type="text" name="provinsi" class="form-control" placeholder="Provinsi" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Kabupaten / Kota</label>
                                    <input type="text" name="kota" class="form-control" placeholder="Kab/Kota" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Kecamatan</label>
                                    <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Kelurahan / Desa</label>
                                    <input type="text" name="kelurahan" class="form-control" placeholder="Kelurahan" required>
                                </div>
                                <div class="col-6 col-md-3">
                                    <label class="form-label">RT</label>
                                    <input type="text" name="rt" class="form-control" placeholder="000" required>
                                </div>
                                <div class="col-6 col-md-3">
                                    <label class="form-label">RW</label>
                                    <input type="text" name="rw" class="form-control" placeholder="000" required>
                                </div>
                            </div>
                            
                            <!-- SECTION 3: DOKUMEN -->
                            <hr class="border-light my-4">
                            <h6 class="text-uppercase text-secondary fw-bold mb-3 small"><i class="bi bi-file-earmark-lock2-fill me-2"></i>Dokumen Validasi</h6>
                            
                            <div class="mb-4">
                                <label class="upload-box p-4 rounded-3 d-block border-2">
                                    <input type="file" name="ktp" required>
                                    <div class="upload-icon mb-2 text-primary">
                                        <i class="bi bi-cloud-arrow-up display-6"></i>
                                    </div>
                                    <div class="fw-bold text-dark">Klik untuk unggah Foto KTP</div>
                                    <div class="small text-muted">Format JPG/PNG. Maksimal 5MB.</div>
                                </label>
                                <div class="form-text mt-2 text-success">
                                    <i class="bi bi-shield-lock-fill me-1"></i> File akan dienkripsi otomatis sebelum disimpan.
                                </div>
                            </div>
                            
                            <!-- SUBMIT -->
                            <div class="d-flex align-items-center gap-2 mb-4">
                                <input type="checkbox" class="form-check-input" id="checkValid" required>
                                <label for="checkValid" class="form-check-label small text-secondary">
                                    Saya menyatakan data yang diisi adalah benar dan dapat dipertanggungjawabkan.
                                </label>
                            </div>

                            <button type="submit" class="btn btn-primary w-100 py-3 rounded-3 fw-bold shadow-sm">
                                <i class="bi bi-send-fill me-2"></i> Kirim Pengajuan
                            </button>

                        </form>
                    </div>
                </div>
                
                <div class="text-center mt-4 text-muted small">
                    &copy; 2026 Universitas Teknokrat Indonesia
                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../../public/assets/js/navbar.js"></script>
</body>
</html>
