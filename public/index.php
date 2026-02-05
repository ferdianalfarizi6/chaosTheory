
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pengajuan Bansos | Universitas Teknokrat Indonesia</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css">
</head>

<body class="d-flex flex-column min-vh-100 bg-light">

    <!-- ===== NAVBAR ===== -->
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-dark auto-hide-navbar">
        <div class="container">
            <!-- LEFT: Identity -->
            <a class="navbar-brand d-flex align-items-center gap-3" href="#">
                <img src="assets/img/UNIVERSITASTEKNOKRAT.PNG" alt="Logo" height="42">
                <div class="d-flex flex-column lh-1">
                    <span class="fw-bold" style="font-size: 1.1rem; letter-spacing: 0.5px;">UNIVERSITAS TEKNOKRAT INDONESIA</span>
                    <span class="navbar-text-small text-white opacity-75" style="font-size: 0.85rem; margin-top: 2px;">Sistem Informasi Bantuan Sosial</span>
                </div>
            </a>

        <!-- RIGHT -->
        <div class="ms-auto d-none d-md-block text-white opacity-75 small">
            <i class="bi bi-building-fill me-1"></i> Pusat Layanan Digital
        </div>
    </div>
</nav>


    <!-- ===== MAIN CONTENT ===== -->
    <main class="flex-grow-1 d-flex align-items-center justify-content-center py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    
                    <div class="card border-0 shadow-lg text-center p-4">
                        <div class="card-body">
                            
                            <!-- Hero Icon/Logo -->
                            <div class="mb-4">
                                <img src="assets/img/logo_bansos_placeholder.png" alt="" style="max-height: 80px; opacity: 0.8;" onerror="this.style.display='none'">
                                <!-- Flexible if img is missing, show icon -->
                                <i class="bi bi-shield-lock text-primary display-3" style="font-size: 4rem;"></i>
                            </div>

                            <h2 class="card-title fw-bold text-primary mb-2">Selamat Datang</h2>
                            <p class="text-muted mb-4">
                                Portal Layanan Pengajuan Bantuan Sosial Digital<br>
                                <strong>Universitas Teknokrat Indonesia</strong>
                            </p>

                            <div class="d-grid gap-3 col-md-10 mx-auto">
                                <a href="../app/views/pengajuan/form.php" class="btn btn-primary btn-lg shadow-sm">
                                    <i class="bi bi-file-earmark-text me-2"></i> Buat Pengajuan Baru
                                </a>
                                <a href="../app/views/admin/dashboard.php" class="btn btn-outline-primary btn-lg">
                                    <i class="bi bi-speedometer2 me-2"></i> Dashboard Admin
                                </a>
                            </div>

                            <div class="mt-4 pt-3 border-top">
                                <small class="text-muted">
                                    <i class="bi bi-lock-fill text-success"></i> 
                                    Data Anda dilindungi dengan enkripsi <strong>Chaos-Based Cryptography</strong>
                                </small>
                            </div>

                        </div>
                    </div>

                    <div class="text-center mt-4 text-muted small">
                        &copy; 2026 Sistem Informasi Bansos. All Entitlements Reserved.
                    </div>

                </div>
            </div>
        </div>
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/navbar.js"></script>

   

</body>
</html>
