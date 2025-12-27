<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Dashboard - Perpustakaan</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {

            background-image: url("background/background.JPG");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: #0000;
        }

        .navbar {
            background-color: transparent;
            /* hijau utama */
        }

        .card {
            background-color: transparent;
            transition: 0.3s;
            border: none;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
        }

        .card i {
            font-size: 3rem;
        }

        .btn-logout {
            background-color: transparent;
            transition: 0.10s;
            border: none;
            color: white;
        }


        .btn-logout:hover {
            transform: translateY(-3px);
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.15);
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <i class="bi bi-book"></i> Perpustakaan
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item me-3">
                        <span class="nav-link text-white">
                            <i class="bi bi-person-circle"></i>
                            <?= $_SESSION['nama_lengkap'] ?> (<?= $_SESSION['role'] ?>)
                        </span>
                    </li>
            </div>
            <li class="nav-item">
                <a class="btn btn-sm btn-logout" href="login.php">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </a>

            </li>
            </ul>
        </div>
        </div>
    </nav>

    <!-- Konten Dashboard -->
    <div class="container my-5">
        <h3 class="fw-bold mb-4 text-light">
            Selamat Datang, <?= $_SESSION['nama_lengkap'] ?> 👋
        </h3>

        <div class="row g-4">
            <!-- Card Data Buku -->
            <div class="databuku col-md-3 col-sm-6">
                <a href="buku.php" class="text-decoration-none  text-light">
                    <div class="card shadow-sm text-center p-3 h-100">
                        <i class="bi bi-journal-bookmark  text-light"></i>
                        <h5 class="mt-3 text-light">Data Buku</h5>
                        <p class=" text-light">Kelola koleksi buku</p>
                    </div>
                </a>
            </div>

            <!-- Card Data Anggota -->
            <div class="dataanggota col-md-3 col-sm-6">
                <a href="anggota.php" class="text-decoration-none  text-light">
                    <div class="card shadow-sm text-center p-3 h-100">
                        <i class="bi bi-people  text-light"></i>
                        <h5 class="mt-3 text-light">Data Anggota</h5>
                        <p class=" text-light">Kelola data anggota</p>
                    </div>
                </a>
            </div>

            <!-- Card Peminjaman -->
            <div class="pinjam col-md-3 col-sm-6">
                <a href="peminjaman.php" class="text-decoration-none  text-light">
                    <div class="card shadow-sm text-center p-3 h-100">
                        <i class="bi bi-arrow-left-right  text-light"></i>
                        <h5 class="mt-3 text-light">Peminjaman</h5>
                        <p class=" text-light">Catat transaksi peminjaman</p>
                    </div>
                </a>
            </div>

            <!-- Card Pengembalian -->
            <div class="pengembalian col-md-3 col-sm-6">
                <a href="pengembalian.php" class="text-decoration-none  text-light">
                    <div class="card shadow-sm text-center p-3 h-100">
                        <i class="bi bi-arrow-repeat  text-light"></i>
                        <h5 class="mt-3 text-light">Pengembalian</h5>
                        <p class=" text-light">Kelola data pengembalian</p>
                    </div>
                </a>
            </div>

            <!-- Card Pengguna -->
            <div class="pengguna col-md-3 col-sm-6">
                <a href="user_list.php" class="text-decoration-none text-light">
                    <div class="card shadow-sm text-center p-3 h-100">
                        <i class="bi bi-person-gear text-light"></i>
                        <h5 class="mt-3 text-light">Data Pengguna</h5>
                        <p class="text-light">Kelola akun admin/staff</p>
                    </div>
                </a>
            </div>

            <!-- Card Laporan -->
            <div class="laporan col-md-3 col-sm-6">
                <a href="laporan.php" class="text-decoration-none  text-light">
                    <div class="card shadow-sm text-center p-3 h-100">
                        <i class="bi bi-bar-chart-line  text-light"></i>
                        <h5 class=" text-light" class="mt-3">Laporan</h5>
                        <p class=" text-light">Cetak laporan kegiatan</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>