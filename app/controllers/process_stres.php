<?php
session_start();
include '../config/koneksi.php';

if (!isset($_SESSION['id_user'])) {
    header("Location: ../../public/pages/login.php");
    exit();
}

$id_user = $_SESSION['id_user'];

// Ambil skor
$skor = $_POST['satu'] +
        $_POST['dua'] +
        $_POST['tiga'] +
        $_POST['empat'] +
        $_POST['lima'] +
        $_POST['enam'] +
        $_POST['tujuh'] +
        $_POST['delapan'] +
        $_POST['sembilan'];

// Simpan ke database (aman pakai prepared statement)
$stmt = $koneksi->prepare("INSERT INTO stres (id_user, skor, tgl_buat) VALUES (?, ?, NOW())");
$stmt->bind_param("ii", $id_user, $skor);

if ($stmt->execute()) {
    header("Location: ../../public/pages/riwayat.php?riwayat=stres");
    exit();
} else {
    echo "Error: " . $stmt->error;
}
