<?php
// Mengatur default timezone
date_default_timezone_set('Asia/Jakarta');

// Memasukkan file koneksi
include_once "conn.php";

// Koneksi ke database

$con = mysqli_connect($con['host'], $con['user'], $con['pass'], $con['db']);
if (mysqli_connect_errno()) {
    die("Gagal koneksi ke MySQL: " . mysqli_connect_error());
}

// Fungsi untuk mengembalikan base URL
function base_url($path = '') {
    return 'http://localhost/rumahsakit/' . ltrim($path, '/'); // Menambahkan ltrim untuk menghindari double slash
}

// Fungsi untuk format tanggal Indonesia
function tgl_indo($tgl) {
    $tanggal = substr($tgl, 8, 2);
    $bulan = substr($tgl, 5, 2);
    $tahun = substr($tgl, 0, 4);

    return $tanggal . "/" . $bulan . "/" . $tahun;
}
?>
