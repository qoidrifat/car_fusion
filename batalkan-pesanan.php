<?php
// Mulai sesi dan koneksi database
session_start();
require "koneksi.php"; // File koneksi ke database

// Validasi parameter yang diterima
if (!isset($_GET['id']) || !isset($_GET['alasan'])) {
    echo "Parameter tidak valid!";
    exit;
}

// Ambil parameter dari URL
$id_order = intval($_GET['id']);
$alasan_pembatalan = mysqli_real_escape_string($db, $_GET['alasan']);

// Validasi apakah order yang dimaksud ada
$query_check = "SELECT * FROM tbl_order WHERE id_order = '$id_order'";
$result_check = mysqli_query($db, $query_check);

if (mysqli_num_rows($result_check) == 0) {
    echo "<script>alert('Pesanan tidak ditemukan!');</script>";
    echo "<script>location='orderan.php';</script>";
    exit;
}

// Cek apakah alasan sudah ada di tabel alasan
$query_alasan = "SELECT id_alasan FROM tbl_alasan WHERE isi_alasan = '$alasan_pembatalan'";
$result_alasan = mysqli_query($db, $query_alasan);

if (mysqli_num_rows($result_alasan) > 0) {
    // Jika alasan sudah ada, ambil id_alasan
    $data_alasan = mysqli_fetch_assoc($result_alasan);
    $id_alasan = $data_alasan['id_alasan'];
} else {
    // Jika alasan belum ada, tambahkan ke tabel alasan
    $query_insert_alasan = "INSERT INTO tbl_alasan (isi_alasan) VALUES ('$alasan_pembatalan')";
    if (mysqli_query($db, $query_insert_alasan)) {
        $id_alasan = mysqli_insert_id($db); // Ambil ID alasan baru
    } else {
        echo "<script>alert('Gagal menambahkan alasan pembatalan!');</script>";
        echo "<script>location='orderan.php';</script>";
        exit;
    }
}

// Update status pesanan di tbl_order
$query_update = "UPDATE tbl_order SET status = 'Produk Dibatalkan', id_alasan = '$id_alasan' WHERE id_order = '$id_order'";
if (mysqli_query($db, $query_update)) {
    echo "<script>
        alert('Pesanan berhasil dibatalkan!');
        window.location.href = 'orderan.php';
    </script>";
} else {
    echo "<script>alert('Gagal membatalkan pesanan!');</script>";
    echo "<script>location='orderan.php';</script>";
}

?>
