<?php include_once('../_header.php'); ?>

<style>
    /* Styling dasbor */
    body {
        background-color: #f4f6f9; /* Warna background */
        font-family: 'Arial', sans-serif;
    }

    .dashboard-header {
        background-color: #ffffff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .dashboard-header img {
        width: 50px;
        height: auto;
        margin-right: 15px;
    }

    .dashboard-content {
        margin-top: 20px;
    }

    .dashboard-card {
        background-color: #ffffff;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s;
        margin-bottom: 20px;
        display: inline-block;
        width: 30%;
        margin-right: 1%;
        vertical-align: top;
    }

    .dashboard-card:hover {
        transform: translateY(-5px);
    }

    .dashboard-card h2 {
        font-size: 24px;
        color: #333;
    }

    .icon {
        font-size: 30px;
        color: #007bff;
        margin-right: 10px;
    }

    .btn-custom {
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        text-decoration: none;
        display: inline-block;
        transition: background-color 0.5s;
    }

    .btn-custom:hover {
        background-color: #0056b3;
    }

    .footer {
        margin-top: 30px;
        text-align: center;
        color: #777;
    }

    /* Styling tabel untuk data poliklinik */
    .poliklinik-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .poliklinik-table th, .poliklinik-table td {
        padding: 10px;
        border: 1px solid #ddd;
        text-align: left;
    }

    .poliklinik-table th {
        background-color: #f4f6f9;
    }
</style>

<div class="dashboard-header">
    <div class="logo-title">
        <img src="<?= base_url('_assets/images/logo.png'); ?>" alt="Logo">
        <h1>Dashboard Rumah Sakit</h1>
    </div>
</div>

<div class="dashboard-content">
    <?php
    // Query untuk menghitung jumlah pasien, dokter, dan poli klinik
    $jumlah_pasien = mysqli_num_rows(mysqli_query($con, "SELECT * FROM tb_pasien"));
    $jumlah_dokter = mysqli_num_rows(mysqli_query($con, "SELECT * FROM tb_dokter"));
    $jumlah_poli = mysqli_num_rows(mysqli_query($con, "SELECT * FROM tb_poliklinik"));
    ?>

    <div class="dashboard-card">
        <h2>Jumlah Pasien</h2>
        <div>
            <i class="icon fas fa-users"></i>
            <span><?= $jumlah_pasien; ?></span>
        </div>
    </div>

    <div class="dashboard-card">
        <h2>Jumlah Dokter</h2>
        <div>
            <i class="icon fas fa-user-md"></i>
            <span><?= $jumlah_dokter; ?></span>
        </div>
    </div>

    <div class="dashboard-card">
        <h2>Jumlah Poli Klinik</h2>
        <div>
            <i class="icon fas fa-clinic-medical"></i>
            <span><?= $jumlah_poli; ?></span>
        </div>
    </div>

    <!-- Tabel Data Poliklinik -->
    <div class="dashboard-card">
        <h2>Data Poliklinik</h2>
        <?php
        // Query untuk mengambil data poliklinik
        $query_poli = mysqli_query($con, "SELECT * FROM tb_poliklinik");
        if (mysqli_num_rows($query_poli) > 0) {
            echo '<table class="poliklinik-table">
                    <thead>
                        <tr>
                           
                            <th>Nama Poli</th>
                            <th>Lokasi</th>
                        </tr>
                    </thead>
                    <tbody>';
            while ($row = mysqli_fetch_assoc($query_poli)) {
                echo '<tr>
                        <td>' . $row['nama_poli'] . '</td>
                        <td>' . $row['lokasi'] . '</td>
                      </tr>';
            }
            echo '</tbody></table>';
        } else {
            echo '<p>Tidak ada data poliklinik.</p>';
        }
        ?>
    </div>
</div>

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<?php include_once('../_footer.php'); ?>
