<?php
require_once "_config/config.php";
require "_assets/libs/vendor/autoload.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Aplikasi Rumah Sakit">
    <meta name="author" content="">
    <title>Aplikasi Rumah Sakit</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url('_assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('_assets/css/simple-sidebar.css'); ?>" rel="stylesheet">
    <!-- Load DataTables -->
    <link href="<?= base_url('_assets/libs/DataTables/datatables.min.css'); ?>" rel="stylesheet">
    <!-- Load FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Load jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    <!-- Load CKEditor -->
    <script src="<?= base_url('_assets/libs/vendor/ckeditor/ckeditor/ckeditor.js'); ?>"></script>

    <style>
        body {
            background: linear-gradient(135deg, #74ebd5, #ACB6E5);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
        }

        #sidebar-wrapper {
            background: #343a40;
            color: #ffffff;
            min-height: 100vh;
            transition: all 0.3s;
        }

        .sidebar-nav li a {
            color: #ffffff;
            padding: 15px 20px;
            display: block;
            font-size: 16px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            transition: background 0.3s, color 0.3s;
        }

        .sidebar-nav li a:hover {
            background: #495057;
            color: #ffffff;
        }

        .sidebar-brand a {
            font-size: 24px;
            font-weight: bold;
            color: #ffffff;
            text-align: center;
            margin: 20px 0;
            display: block;
            transition: color 0.3s;
        }

        .sidebar-brand a:hover {
            color: #f8f9fa;
        }

        .container-fluid {
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .navbar {
            background-color: #007bff;
            border-radius: 0 0 10px 10px;
        }

        .btn {
            border-radius: 5px;
            transition: transform 0.2s;
        }

        .btn:hover {
            transform: scale(1.05);
        }

        #menu-toggle {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background 0.3s, transform 0.2s;
        }

        #menu-toggle:hover {
            background-color: #0056b3;
            transform: scale(1.1);
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#"><i class="fas fa-hospital-alt"></i> Rumah Sakit</a>
                </li>
                <li>
                    <a href="<?= base_url('dashboard'); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                </li>
                <li>
                    <a href="<?= base_url('pasien/data.php'); ?>"><i class="fas fa-user-injured"></i> Data Pasien</a>
                </li>
                <li>
                    <a href="<?= base_url('dokter/data.php'); ?>"><i class="fas fa-user-md"></i> Data Dokter</a>
                </li>
                <li>
                    <a href="<?= base_url('poliklinik/data.php'); ?>"><i class="fas fa-clinic-medical"></i> Data Poliklinik</a>
                </li>
                <li>
                    <a href="<?= base_url('obat/data.php'); ?>"><i class="fas fa-pills"></i> Data Obat</a>
                </li>
                <li>
                    <a href="<?= base_url('rekammedis/data.php'); ?>"><i class="fas fa-file-medical"></i> Rekam Medis</a>
                </li>
                <li>
                    <a href="<?= base_url('auth/logout.php'); ?>"><i class="fas fa-sign-out-alt text-danger"></i> <span class="text-danger">Logout</span></a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary p-3">
                <div class="d-flex align-items-center w-100">
                    <button class="btn btn-light mr-3" id="menu-toggle">
                        <i class="fas fa-bars"></i>
                    </button>
                    <span class="navbar-text text-white">
                        Selamat datang, <strong><?= htmlspecialchars($_SESSION['user'] ?? 'Pengguna'); ?></strong>
                    </span>
                </div>
            </nav>
            <div class="container-fluid mt-4">
                <!-- Konten halaman -->
            </div>
        </div>
    </div>
</body>

</html>
